<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin',[App\Http\Controllers\AdminControllador::class,'index'])->name('admin.Dashboard');
Route::get('/admin/login',[App\Http\Controllers\Auth\AdminLoginController::class,'index'])->name('admin.login');
Route::post('/admin/login',[App\Http\Controllers\Auth\AdminLoginController::class,'login'])->name('admin.login.submit');