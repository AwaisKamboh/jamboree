<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/event_seeker', function () {
    return view('event-seeker-homepage');
});

Route::get('/event_worker', function () {
    return view('event-workers-homepage');
});

Route::get('/post_event', function () {
    return view('post-an-event');
});

Route::get('/posted_event', function () {
    return view('my-post-event');
});

Route::get('/active_event', function () {
    return view('my-active-event');
});
Route::get('/my_bid', function () {
    return view('bid');
});

Route::get('/payments', function () {
    return view('payment');
});

Route::get('/user_profile', function () {
    return view('usersprofile');
});

// Route::get('bid', function () {
//     return view('bid');
// });

Route::get('/my_active_orders', function () {
    return view('my-active-orders');
});

Route::get('/my_proposal', function () {
    return view('My-proposal');
});

Route::get('/get_paid', function () {
    return view('getpaid');
});