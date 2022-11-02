<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PersonnelsController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

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

// Login Route's
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'loginPost'])->name('login.post');
Route::get('/', function () {
    return redirect()->to('admin');
});

Route::middleware(Authenticate::class)->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    //Personnel's Route's
    Route::get('personnels', [PersonnelsController::class, 'index'])->name('personnels');
    Route::get('personnels/create', [PersonnelsController::class, 'create'])->name('personnels.create');
    Route::post('personnels/store', [PersonnelsController::class, 'store'])->name('personnels.store');
    Route::get('personnels/edit/{id}', [PersonnelsController::class, 'edit'])->name('personnels.edit');
    Route::post('personnels/update/{id}', [PersonnelsController::class, 'update'])->name('personnels.update');
    Route::get('personnels/delete/{id}', [PersonnelsController::class, 'destroy'])->name('personnels.destroy');

    //User Route's
    Route::get('user', [UsersController::class, 'index'])->name('user');
    Route::post('user/{id}', [UsersController::class, 'update'])->name('user.post');

    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});