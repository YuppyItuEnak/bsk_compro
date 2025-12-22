<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard.index');
});

Route::get('/userlist', [DashboardController::class, 'userlist'])->name('userlist');
Route::delete('/deleteuser/{user}', [DashboardController::class, 'deleteuser'])->name('userlist.delete');


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
Route::resource('tentangkami', App\Http\Controllers\TentangKamiController::class);




