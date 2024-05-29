<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    DashboardController,
    ProfileController,
    MailSettingController,
    OrganizationController,
};
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\Front\Auth\AuthenticatedSessionController as AuthAuthenticatedSessionController;
use App\Http\Controllers\Front\DonateController;
use App\Http\Controllers\Front\DonationController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\LoginController;
use App\Http\Controllers\Front\ProfileCOntroller as FrontProfileCOntroller;
use App\Http\Controllers\ReportController;
use App\MsgApp;

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
Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/sign-up', [LoginController::class, 'register_save'])->name('sign-up.store');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/signin', [LoginController::class, 'login_post'])->name('signin');

Route::get('/admin/login', function () {
    return view('auth.login');
});
require __DIR__.'/auth.php';

Route::namespace('App\Http\Controllers\Admin')->name('admin.')->prefix('admin')->middleware(['auth'])->group(function(){
    Route::resource('roles','RoleController');
    Route::resource('permissions','PermissionController');
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('logout', [AuthAuthenticatedSessionController::class, 'logout'])->name('admin.logout');
      
});


Route::group(['middleware' => 'customer'], function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('userlogout');
   
});





