<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


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

Route::get('/', [Homecontroller::class,'Dashboard'])->name('dashboard')->middleware(['auth']);

Route::get('/login', [Homecontroller::class,'login'])->name('login');
Route::post('/login', [Usercontroller::class,'userlogin'])->name('loginuser');

Route::get('/register', [Homecontroller::class,'register'])->name('register');

Route::post('/register', [Usercontroller::class,'userregister'])->name('registeruser');

Route::get('/logout', [Usercontroller::class,'logout'])->name('logout');
Route::get('/delete/{id}',[HomeController::class,'delete']);