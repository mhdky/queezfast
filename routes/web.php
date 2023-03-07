<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

// home
Route::get('/', [HomeController::class, 'index'])->name('home');

// live search
Route::get('/search', [HomeController::class, 'search'])->name('search');

// postingan dengan category tertentu
Route::get('/category/{category:slug}',[CategoryController::class, 'index']);

// login
Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest')->name('auth-login');

// logout
Route::post('/logasdfwsf', [AuthController::class, 'logout'])->name('logout');

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// post
Route::get('/post', [PostController::class, 'index'])->middleware('auth')->name('post');