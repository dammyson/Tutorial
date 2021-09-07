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
    return view('welcome');
});


Route::get('/home', '\App\Http\Controllers\HomeController@getHome')->middleware(['auth', 'verified', 'twofactor'])->name('home');

Route::get('/alert', function () {
    return redirect('home')->with('info', 'Successfully Signup.');
});

Route::get('/signup',  [AuthController::class,'getSignup'])->middleware('guest')->name('auth.signup');
Route::post('/signup', [AuthController::class,'postSignup'])->middleware('guest');
/**
 * SIGNIN
 */
Route::get('/login',  [AuthController::class,'getSignin'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class,'login'])->middleware('guest');
Route::get('/logout',  [AuthController::class,'getSignout'])->name('auth.signout');

Route::get('verify/resend', '\App\Http\Controllers\TwoFactorController@resend')->name('verify.resend');
Route::resource('verify', '\App\Http\Controllers\TwoFactorController')->only(['index', 'store']);
