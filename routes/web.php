<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('users_pages.home');
});

Route::get('/product', function (){
    return view('users_pages.product');
});

Route::get('/article', function (){
    return view('users_pages.article');
});

Route::get('/contact', function (){
    return view('users_pages.contact');
});

Route::get('/about', function (){
    return view('users_pages.about_us');
});


// User Routes

//khusus untuk register
Route::resource('auth', UserController::class);

//khusus untuk login
Route::get("/login", [UserController::class, 'directLogin'])->name('login');

Route::post("/login/loginProcess", [UserController::class, 'loginProcess'])->name('login.loginProcess');

