<?php


// admin login route
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\PlanController;
use \App\Http\Controllers\admin\UserController;
use \App\Http\Controllers\admin\DashboardController;
Route::get('/bookadmin', function () {
    return view('dashboard.login');
})->name('admin');

Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])
->name('admin.dashboard')->middleware('admin');



// subscription plan routes

Route::resource('admin/plans', PlanController::class)->middleware('admin');
Route::put('admin/plans/{id}/status', [PlanController::class, 'status'])
->name('admin.plans.status')->middleware('admin');


Route::resource('admin/user', UserController::class)->middleware('admin');