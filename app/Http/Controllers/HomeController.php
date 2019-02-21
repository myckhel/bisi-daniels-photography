<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Blog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(Request $request)
    {
      return view('home');
    }

    public function blog()
    {
      return view('blog');
    }

    public function contact()
    {
      return view('contact');
    }

    public function login()
    {
      return view('auth.login');
    }

    public function portfolio()
    {
      return view('portfolio');
    }

    public function about()
    {
      return view('about');
    }

    public function sendMail(Request $request){
          $name = $request['name'];
          $from = $request['email'];
          $message = $request['message'];
          $subject = $request['subject'];;
          $to = "myckhel123@gmail.com";
          $compose = "New contact email \n Name: $name \n Message: $message";

          $response = array('status' => true, 'text' => "Message Sent Successfully");

          //send email
          try {
            mail($to, $subject, $compose);
          } catch (\Exception $e) {
            return response()->json(array('status' => false, 'text' => "Error occured".(string) $e->getMessage() ));
          }
          return response()->json($response);
      $response = array('status' => false, 'text' => "Error occured");
      return response()->json($response);
    }

    public function postGet(Request $request){
      $start = $request->start ? $request->start : 0;
      $end = $request->end ? $request->end : ($start + 9);
      $posts = Blog::skip($start)->take($end)->get();
      return response()->json($posts);
    }

    public function postView(Request $request){
      $post = Blog::find($request->id);
      if ($post) {
        return view('view-post', compact('post'));
      }
      return 'Post Not Exists';
    }

    public function uploadImg(Request $request){
      $image_name = "feature-".$request->id; // default profile image
      if ($request->hasFile('feature'))
      {
          $image = $request->file('feature');
          $input['imagename'] = ($image->getClientOriginalExtension() != '') ? $image_name.'.'.$image->getClientOriginalExtension() : $image_name.'.jpg';
          print_r($input);

          $destinationPath = base_path('/img/blog_posts');

          $image->move($destinationPath, $input['imagename']);

          $image_name = $input['imagename'];

          $post = Blog::find($request->id);
          if ($post) {
            // code...
            $post->feature = $image_name;
            $post->save();
          } else {
            return response()->json(['status' => false, 'text' => "Post NOt Exists"]);
          }

          return response()->json(['status' => true,]);
      }
      return response()->json(['status' => false, 'text' => "No photo file"]);
    }
}
