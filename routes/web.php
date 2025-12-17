<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('users_pages.home');
});


Route::get('/about', function (){
    return view('users_pages.about_us');
});


// User Routes

//khusus untuk register
Route::resource('auth', UserController::class);

//Khusus untuk direct ke dashboard sesuai role
Route::resource('dashboard', DashboardController::class);

//khusus untuk login
Route::get("/login", [UserController::class, 'directLogin'])->name('login');
Route::post("/login/loginProcess", [UserController::class, 'loginProcess'])->name('login.loginProcess');
Route::post("/logout", [UserController::class, 'logout'])->name('logout');


Route::resource('products', App\Http\Controllers\ProductsController::class);
Route::resource('articles', App\Http\Controllers\ArticlesController::class);
Route::resource('companyInfo', App\Http\Controllers\InfoPerusahaanController::class);



