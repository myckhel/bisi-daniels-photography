<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Notification;
use Illuminate\Support\Facades\Mail;
use App\Blog;
use App\User;

class AdminController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
      // $this->middleware('role');
  }
    //

    public function home(Request $request){
      if ($request->isMethod('post')) {
        $post = Blog::find($request->id);
        if ($post) {
          $post->delete();
          return response()->json(['status' => true]);
        }
        return response()->json(['status' => false, 'text' => 'post not exists']);
      }

      $posts = Blog::all();

      return view('admin.index', compact('posts'));
    }

    public function usersGet(){
      $users = User::all();

      return view('admin.users', compact('users'));
    }

    public function postAdd(Request $request){
      if ($request->isMethod('post')) {
        if (isset($request->action) && $request->action == 'edit') {
          $post = Blog::find($request->id);
          $post->title = $request->title;
          $post->description = $request->description;
          $post->content = $request->content;
          if (isset($request->upload)) {
            $post->feature = $request->feature;
          }
          try {
            $post->save();
          } catch (\Exception $e) {
            return response()->json(['status' => false, 'text' => $e->getMessage()]);
          }
          if (isset($request->upload)) {
            return response()->json(['status' => true, 'id' => $post->id]);
          }
          return response()->json(['status' => true]);
        }

        $title = $request->title;
        $description = $request->description;
        $content = $request->content;
        $error = [];

        //very basic validation
    		if($title ==''){
    			$error[] = 'Please enter the title.';
    		}

    		if($description ==''){
    			$error[] = 'Please enter the description.';
    		}

    		if($content ==''){
    			$error[] = 'Please enter the content.';
    		}

        if ($error) {
          return response()->json(['status' => false, 'text' => $error]);
        }

				$create = Blog::create([
					'title' => $request->title,
					'description' => $request->description,
					'content' => $request->content,
				]);
        return response()->json(['status' => true, 'id' => $create->id]);
      }

      if (isset($request->action) && $request->action == 'edit') {
        $post = Blog::find($request->id);
        return view('admin.add-post', compact('post'));
      }

      return view('admin.add-post');
    }

    public function eventCreate(Request $request){
      $event_sdate =  $request->event_sdate;
      $event_edate =  $request->event_edate;//date('Y-m-d',strtotime());
      //check for past date
        if (NOW() > $event_edate)
        {
          return response()->json(['status' => false, 'reason' => 'Date already past']);
        }
      //check if already exists
      // $exists = Event::where('event_sdate', $event_edate)->get(['id'])->count();
      //   if($exists > 0){
      //     return response()->json(['status' => false, 'reason' => 'Event exists for that date']);
      //   }
      //try to create
      $create = Event::create([
        'event_sdate' => $event_sdate,
        'event_edate' => $event_edate,
      ]);
      if ($create) {
        # deactivate ative event
        // $active = Event::where('active', 1)->where('id', '!=', $create->id)->get();
        #set users that hasnt mark the active attendance to NULL
        //select users not in attendance with active event
        //$ignoring =  Users::select()->whereRaw()->with('users')->get();
        //get all users and make each attendance to the newly created event = NULL
        $users = User::select('id')->get();
        foreach ($users as $key => $value) {
          // code...
          Attendance::create([
            'attendance' => 3,
            'user_id' => $value->id,
            'event_id' => $create->id
          ]);
        }
        // # deactivate ative event
        // foreach ($active as $key => $value) {
        //   # code...
        //   $value->active = 0;
        //   $value->save();
        // }
        $users = User::all();
        foreach ($users as $key => $user) {
          // code...
          $user->notify(new NewEventNotification('New Attendance Available','Will you attend service on '.$event_edate, $user->id, $create->id));
          Mail::to($user)->send(new NewEventMail($create));
        }
        // Notification::send($user = User::all(), );
        return response()->json(['status' => true]);
      }else{
        return response()->json(['status' => false, 'reason' => 'Unkown error occured']);
      }
    }

    public function report(){
      return view('admin.report');
    }

    public function sendNotification(Request $request)
    {
        $request->user()->notify(new GenericNotification('Title', 'Body'));

        return response()->json('Notification sent.', 201);
    }

    public function eventReport(Request $request){
      if ($request) {
        // if request from datatables
        if ($request->draw) {
          // code...
          if ($request->history) {
            // code...
            $users = User::all();
            $history = collect(new Attendance);//[];
            foreach ($users as $key => $user) {
              //array_push($history, Attendance::selectRaw('users.firstname, users.lastname, users.role,
              $attendance = Attendance::getUserTotalStat($user);
                $history->push($attendance);
            }
            return Datatables::of($history)->make();
          }
          //for finding report
          if ($request->find || $request->report) {
            if ($request->find) {
              // code...for finding event
              $event_date = $request->date;
              $event = Event::getEventByEndDate($event_date);
            }else {
              //initial
              $event = Event::getActive();
            }

            if ($event) {
              // code...
              $report = Event::getUserStat($event);
              return Datatables::of($report)->make();
              // return response()->json(['status' => true, 'message' => 'Success', 'report' => $report]);
            }else{
              $report = collect(new Attendance);
              return Datatables::of($report)->make();
              //return response()->json(['success' => false, 'date' => $squery_date]);
            }
          }
          //return response()->json(['status' => true, 'message' => 'Success', 'report' => $report, 'history' => $history]);
        }
        return 1;
      }
    }

    public function createService(Request $request){
      $name = $request->name;
      $sdays = $request->sdays;
      $edays = $request->edays;
      //check conflit name

      //create service
      $service = Service::create([
        'name' => $name,
        'sdays' => $sdays,
        'edays' => $edays,
      ]);
      if ($service) {
        // code...
        return response()->json(['status' => true]);
      }
      return;
    }
}
