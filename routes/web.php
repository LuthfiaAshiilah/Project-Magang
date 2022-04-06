<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaptchaController;

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
    return view('home');
});

Route::get('/login', function () {
    return view('login', [
        "title" => "Login Page"
    ]);
});

Route::get('/register', function () {
    return view('register', [
        "title" => "Register Page"
    ]);
});

Route::get('/contact-form', [CaptchaController::class, 'index']);
Route::post('/captcha-validation', [CaptchaController::class, 'capthcaFormValidate']);
Route::get('/reload-captcha', [CaptchaController::class, 'reloadCaptcha']);
