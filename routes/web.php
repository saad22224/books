<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\user\ProjectController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.home');
});

Route::get('user/dashboard', function () {
    return view('user/dashbord');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('user/project' , [ProjectController::class , 'show'])->name('project.show');
Route::get('user/project/create' , [ProjectController::class , 'create'])->name('project.create');

Route::get('user/profile', [UserController::class, 'edit'])->name('profile.edit');


Route::middleware('auth')->group(function () {

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
