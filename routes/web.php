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

Route::get('/', function () {
    return view('index');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/blank', function () {
    return view('blank');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/channels', function () {
    return view('channels');
});

Route::get('/forgot_password', function () {
    return view('forgot_password');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/programs', function () {
    return view('programs');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/single_channel', function () {
    return view('single_channel');
});

Route::get('/subscriptions', function () {
    return view('subscriptions');
});

Route::get('/upload', function () {
    return view('upload');
});

Route::get('/upload_video', function () {
    return view('upload_video');
});


Route::get('/video', function () {
    return view('video');
});

Route::get('bridge/showRecent','bridge\VideoController@showNewVideos')->name('showNewVideos');
