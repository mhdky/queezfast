<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SocialmediaController;
use App\Http\Controllers\SponsorController;
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

// data for live search
Route::get('/sdjfqiaaweq112/{searchText}', [HomeController::class, 'search']);

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
// add post
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// sosmed
Route::get('/social-media', [SocialmediaController::class, 'index'])->middleware('auth')->name('social-media');

// blog
Route::get('/blog', [BlogController::class, 'index'])->middleware('auth')->name('blog');

// sponsor
Route::get('/sponsor', [SponsorController::class, 'index'])->middleware('auth')->name('sponsor');