<?php


// admin login route
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\PlanController;

Route::get('/bookadmin', function () {
    return view('dashboard.login');
})->name('admin');

Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

Route::get('/admin/dashboard', function () {
    return view('dashboard.index');
})->name('admin.dashboard')->middleware('admin');



// subscription plan routes

Route::resource('admin/plans', PlanController::class)->middleware('admin');