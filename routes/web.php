<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\organizationController;
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
    return view('welcomepage');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/studentDashboard', [EventController::class, 'index'])->name('studentDashboard');

Route::get('/joboffer/{id}', [EventController::class, 'show'])->name('detailJoboffer');

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/signupstudent', function () {
    return view('signupstudent');
});
Route::post('/signupstudent', [registrationController::class, 'store']);



Route::get('/signuporg', function () {
    return view('signuporg');
});

Route::post('/signuporg', [organizationController::class, 'store']);

Route::get('updateorg', function () {
    return view('updateorg');
});

Route::get('/editevent', function () {
    return view('editevent');
});

Route::get('/inputevent', function () {
    return view('inputevent');
});

Route::get('/studentprofilews', function () {
    return view('studentprofilews');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/dashboardorg', function () {
    return view('dashboardorg');
});