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
    return view('dashboard', [
        "title" => "Dashboard Page"
    ]);
});

Route::get('/todo', function () {
    return view('todo', [
        "title" => "To Do Page"
    ]);
});

Route::get('/addtask', function () {
    return view('addtask', [
        "title" => "Add Task Page"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile Page"
    ]);
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

Route::get('/produk', function () {
    return view('produk', [
        "title" => "Product Page"
    ]);
});

Route::get('/chat', function () {
    return view('chat', [
        "title" => "Message Page"
    ]);
});

Route::get('/team', function () {
    return view('team', [
        "title" => "Members Page"
    ]);
});

Route::get('/perusahaan', function () {
    return view('perusahaan', [
        "title" => "Company Page"
    ]);
});


Route::get('/contact-form', [CaptchaController::class, 'index']);
Route::post('/captcha-validation', [CaptchaController::class, 'capthcaFormValidate']);
Route::get('/reload-captcha', [CaptchaController::class, 'reloadCaptcha']);
