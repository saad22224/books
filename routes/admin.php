<?php


// admin login route
use App\Http\Controllers\admin\AdminLoginController;


Route::get('/admin', function () {
    return view('dashboard.login');
})->name('admin');

Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');