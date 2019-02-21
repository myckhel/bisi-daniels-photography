<?php

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
