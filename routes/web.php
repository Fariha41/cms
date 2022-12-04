<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ParcelController;
use App\Http\Controllers\BookingController;



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
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/do-login',[UserController::class,'doLogin'])->name('do.login');

Route::group(['middleware'=>'auth','prefix'=>'admin'],function (){
    Route::get('/', [DashboardController::class, 'Dashboard'])->name('dashboard');
    // branch
    Route::get('/branch', [BranchController::class, 'index'])->name('branch.index');
    Route::get('/branch/create', [BranchController::class, 'create'])->name('branch.create');
    Route::post('/branch/store', [BranchController::class, 'store'])->name('branch.store');

    //Route::get('/user.userfrom', [UserController::class, 'from']);name('user.from');
    //Route::get('/',[WebController::class,'web'])->name('webpage');
Route::get('/branch/delete/{branch_id}',[BranchController::class,'deletebranch'])->name('admin.branch.delete');
Route::get('/branch/view/{branch_id}',[BranchController::class,'viewbranch'])->name('admin.branch.view');
Route::get('/branch/edit/{branch_id}',[BranchController::class,'edit'])->name('branch.edit');
Route::put('/branch/update/{branch_id}',[BranchController::class,'update'])->name('branch.update');

//parcel type

Route::get('/parcel', [ParcelController::class, 'type'])->name('parcel.type');
Route::get('/parcel/from', [parcelController::class, 'from'])->name('parcel.from');
Route::post('/parcel/stores', [parcelController::class, 'stores'])->name('parcel.stores');

Route::get('/parcel/delete/{parcel_id}',[ParcelController::class,'deleteparcel'])->name('admin.parcel.delete');
Route::get('/parcel/view/{parcel_id}',[parcelController::class,'viewparcel'])->name('admin.parcel.view');
Route::get('/paecel/edit/{parcel_id}',[parcelController::class,'edit'])->name('parcel.edit');
Route::put('/parcel/update/{parcel_id}',[parcelController::class,'update'])->name('parcel.update');


// booking
Route::get('/booking', [BookingController::class, 'bookinglist'])->name('admin.booking');

Route::get('/booking/delete/{booking_id}',[BookingController::class,'deletebooking'])->name('admin.booking.delete');
Route::get('/booking/view/{booking_id}',[BookingController::class,'viewbooking'])->name('admin.booking.view');
Route::get('/booking/edit/{booking_id}',[BookingController::class,'edit'])->name('booking.edit');
Route::put('/booking/update/{booking_id}',[BookingController::class,'update'])->name('booking.update');







});
Route::get('/',[WebController::class,'web'])->name('webpage');
Route::post('/register', [WebController::class, 'registration'])->name('registration');
Route::post('/login', [WebController::class, 'login'])->name('user.login');
Route::get('/logout', [WebController::class, 'logout'])->name('user.logout');
Route::post('/booking', [BookingController::class, 'book'])->name('booking');
Route::get('/booking', [BookingController::class, 'list'])->name('booking');

