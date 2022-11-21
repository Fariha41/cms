<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\WebController;

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

Route::group(['middleware'=>'auth'],function (){
    Route::get('/', [DashboardController::class, 'Dashboard'])->name('dashboard');
    Route::get('/branch', [BranchController::class, 'index'])->name('branch.index');
    Route::get('/branch/create', [BranchController::class, 'create'])->name('branch.create');
    Route::post('/branch/store', [BranchController::class, 'store'])->name('branch.store');

    //Route::get('/user.userfrom', [UserController::class, 'from']);name('user.from');
    //Route::get('/',[WebController::class,'web'])->name('webpage');
Route::get('/branch/delete/{branch_id}',[BranchController::class,'deletebranch'])->name('admin.branch.delete');
Route::get('/branch/view/{branch_id}',[BranchController::class,'viewbranch'])->name('admin.branch.view');
Route::get('/branch/edit/{branch_id}',[BranchController::class,'edit'])->name('branch.edit');
Route::put('/branch/update/{branch_id}',[BranchController::class,'update'])->name('branch.update');
});
