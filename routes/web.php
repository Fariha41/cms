<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\branceController;


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

Route::get('/', [DashboardController::class, 'Dashboard']);
Route::get('/admin-profile',[AdminController::class, 'profile'])->name('admin');
Route::post('/admin-store',[AdminController::class, 'store'])->name('admin.store');
Route::get('/customer',[customerController::class,'profile'])->name('customer');
Route::get('/brance',[branceController::class,'address'])->name('brance');
