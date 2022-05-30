<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrationController;

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

Route::get('/studentDashboard', function () {
    return view('studentDashboard');
});

Route::get('/joboffer', function () {
    return view('jobofferpage');
});

Route::get('/login', function () {
    return view('login');
});

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

Route::get('/editevent', function () {
    return view('inputeditevent');
});

Route::get('/studentprofilews', function () {
    return view('studentprofilews');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});
