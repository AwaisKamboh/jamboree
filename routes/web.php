<?php
use App\Http\Controllers\AuthController;
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
// Route::get('/layout', function () {
//     return view('event-seeker-homepage');
// });
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/event_seeker', function () {
    return view('event-seeker.event-seeker-homepage');
});

Route::get('/event_worker', function () {
    return view('event-worker.event-workers-homepage');
});

Route::get('/post_event', function () {
    return view('event-seeker.post-an-event');
});

Route::get('/posted_event', function () {
    return view('event-seeker.my-post-event');
});

Route::get('/active_event', function () {
    return view('event-seeker.my-active-event');
});
Route::get('/my_bid', function () {
    return view('event-seeker.bid');
});

Route::get('/payments', function () {
    return view('event-seeker.payment.payment');
});

Route::get('/user_profile', function () {
    return view('usersprofile');
});

// Route::get('bid', function () {
//     return view('bid');
// });

Route::get('/my_active_orders', function () {
    return view('event-worker.my-active-orders');
});

Route::get('/my_proposal', function () {
    return view('event-worker.My-proposal');
});

Route::get('/get_paid', function () {
    return view('event-worker\payment\getpaid');
});

Route::get('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class,'login']);
Route::get('/logout', [AuthController::class,'logout']);