<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('users_pages.home');
});

// Route::get('/product', function (){
//     return view('users_pages.product');
// });

// Route::get('/article', function (){
//     return view('users_pages.article');
// });

// Route::get('/contact', function (){
//     return view('users_pages.contact');
// });

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

// Admin Routes
// Route::get("/admin/dashboard", function () {
//     return view('admin_pages.dashboard_admin');
// });

// Route::get("/admin/products", function () {
//     return view('admin_pages.products.index');
// });

// Route::get("/admin/articles", function () {
//     return view('admin_pages.articles.index');
// });

// Route::get("/admin/company-info", function () {
//     return view('admin_pages.info_perusahaan.index');
// });

Route::resource('products', App\Http\Controllers\ProductsController::class);
Route::resource('articles', App\Http\Controllers\ArticlesController::class);
Route::resource('companyInfo', App\Http\Controllers\InfoPerusahaanController::class);



