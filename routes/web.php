<?php
use App\Attendance;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/', 'HomeController@home')->name('home');
// Route::get('/login', 'HomeController@login')->name('login');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/portfolio', 'HomeController@portfolio')->name('portfolio');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/mail/send', 'HomeController@sendMail')->name('mail.send');
Route::get('/posts/get', 'HomeController@postGet')->name('post.get');
Route::get('/posts/view', 'HomeController@postView')->name('post.view');
//user
Route::post('/upload/img', 'HomeController@uploadImg')->name('upload.img');


Route::match(['get', 'post'], '/admin', 'AdminController@home')->name('admin');
Route::get('/admin/users/get', 'AdminController@usersGet')->name('users.get');
Route::match(['get', 'post'], '/admin/post/add', 'AdminController@postAdd')->name('post.add');

// Route::match(['get', 'post'], '/profile', 'HomeController@profile')->name('profile');
// Route::get('/profile/edit', 'HomeController@profileEdit')->name('profile.edit');
// Route::post('/attendance/mark', 'HomeController@mark')->name('mark');
// Route::get('/history', 'HomeController@history')->name('attendance.history');
// Route::get('/event/get', 'HomeController@getevent')->name('getevent');
// Route::get('/attendances', 'HomeController@at')->name('at');
//
// //attendance
// Route::get('/attendance/get', 'AjaxController@getAttendance')->name('attendance.get');
//
// //admin
// Route::get('/event', 'AdminController@event')->name('event');
// Route::post('/event/create', 'AdminController@eventCreate')->name('event.create');
// Route::get('/report', 'AdminController@report')->name('report');
// Route::get('/event/report', 'AdminController@eventReport')->name('event.report');
// //event
// Route::post('/event/able', 'AjaxController@toggleEventActivity')->name('event.able');
// Route::get('/event/get', 'AjaxController@getEvents')->name('events.get');
// Route::post('/event/delete', 'AjaxController@deleteEvent')->name('event.delete');
// Route::post('/event/update', 'AjaxController@updateEvent')->name('event.update');
//
// //service
// Route::post('/service/create', 'AdminController@createService')->name('service.create');
// //ajax
// Route::get('/service/get', 'AjaxController@getServices')->name('services.get');
// Route::get('/service/get/all', 'AjaxController@getService')->name('getService');
// Route::post('/service/delete', 'AjaxController@deleteService')->name('service.delete');
// Route::post('/service/update', 'AjaxController@updateService')->name('service.update');
// //admin
//
//
// //public
// Route::get('/', 'HomeController@index')->name('home');
// //
// Route::get('/welcome', function () {
//     return view('welcome');
// });
// Route::get('/serverSide',  function () {
//         $users = App\User::all();
//         return Datatables::of($users)->make();
//     }
// )->name('serverSide');
// //shared server clear cache
// Route::get('/clear-cache', function() {
//     $exitCode = Artisan::call('cache:clear');
//     // return what you want
// });
// //push admin
// Route::get('/sub', function () {
//     return view('sub');
// });
//
// // Notifications
// Route::post('notifications', 'NotificationController@store')->name('notification.store');
// Route::get('notifications', 'NotificationController@index')->name('notification');
//
// // Push Subscriptions
// Route::post('subscriptions', 'PushSubscriptionController@update')->name('subscription.update');
// Route::post('subscriptions/delete', 'PushSubscriptionController@destroy')->name('subscription.delete');
//
// // Manifest file (optional if VAPID is used)
// Route::get('manifest.json', function () {
//     return [
//         'name' => config('app.name'),
//         'gcm_sender_id' => config('webpush.gcm.sender_id')
//     ];
// });
//
// // mail preview
// Route::get('/mailable/marked', function () {
//     $event = App\Event::find(69);
//     $attendance = App\Attendance::find(242);
//
//     return new App\Mail\MarkedAttendance($event, $attendance);
// });
//
// Route::get('/mailable/new-event', function () {
//     $event = App\Event::find(69);
//     $event->name = (App\Service::find($event->service_id))->name;
//     $user = App\User::find(1);
//     return new App\Mail\NewEventMail($event, $user);
// });
// // end mail preview
//
// // view datatables
// Route::get('/view-data-tables', function () {
//     return view('vendor.datatables.print');
// });
