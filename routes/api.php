<?php

use Illuminate\Http\Request;
use  App\Notifications\GenericNotification;
use App\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/save-subscription/{id}',function($id, Request $request){
  $user = \App\User::findOrFail($id);

  $user->updatePushSubscription($request->input('endpoint'), $request->input('keys.p256dh'), $request->input('keys.auth'));
  $user->notify(new GenericNotification("Welcome To CVMS", "You will now get all of our event's notifications"));
  return response()->json([
    'success' => true
  ]);
})->name('push.save');

Route::post('/send-notification/', function(Request $request){
  // $user = \App\User::findOrFail($id);
  // $user->notify(new GenericNotification($request->title, $request->body));
  Notification::send(User::all(), new  GenericNotification($request->title, $request->body));
  return response()->json([
    'success' => true
  ]);
})->name('push.send');

Route::get('/status', 'ApiController@status')->name('api.status');
Route::get('attendance/mark/{user_id}/{event_id}', 'ApiController@mark')->name('api.mark');
