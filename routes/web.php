<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardCategoryController;
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

// home---------------------------------------------------------------------------------
Route::get('/', [HomeController::class, 'index'])->name('home');
// data for live search
Route::get('/sdjfqiaaweq112/{searchText}', [HomeController::class, 'search']);
// postingan dengan category tertentu
Route::get('/category/{category:slug}',[CategoryController::class, 'index']);

// login---------------------------------------------------------------------------------
Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest')->name('auth-login');
// logout
Route::post('/logasdfwsf', [AuthController::class, 'logout'])->name('logout');

// dashboard---------------------------------------------------------------------------------
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// post----------------------------------------------------------------------------------
Route::get('/post', [PostController::class, 'index'])->middleware('auth')->name('post');
// add post
Route::post('/post', [PostController::class, 'store'])->middleware('auth')->name('posts.store');
// edit post
Route::get('/akfsdqoiwj12/{post:id}', [PostController::class, 'edit'])->middleware('auth');
// updade post
Route::put('/post/{post:id}', [PostController::class, 'update'])->middleware('auth');
// hapus post
Route::delete('/post/{post:id}', [PostController::class, 'destroy'])->middleware('auth');

// category----------------------------------------------------------------------------------
Route::get('/category', [DashboardCategoryController::class, 'index'])->middleware('auth')->name('category');
// add category
Route::post('/category', [DashboardCategoryController::class, 'store'])->middleware('auth');
// edit category
Route::get('/h2ysjdwkjkw/{category:id}', [DashboardCategoryController::class, 'edit'])->middleware('auth');
// updade category
Route::put('/category/{category:id}', [DashboardCategoryController::class, 'update'])->middleware('auth');
// hapus post
Route::delete('/category/{category:id}', [DashboardCategoryController::class, 'destroy'])->middleware('auth');

// sosmed-------------------------------------------------------------------------------
Route::get('/social-media', [SocialmediaController::class, 'index'])->middleware('auth')->name('social-media');
// add sosmed
Route::post('/social-media', [SocialmediaController::class, 'store'])->middleware('auth');
// edit sosmed
Route::get('/sjefjsdajq27/{social:id}', [SocialmediaController::class, 'edit'])->middleware('auth');
// update sosmed
Route::put('/socialMedia/{social:id}', [SocialmediaController::class, 'update'])->middleware('auth');
// hapus sosmed
Route::delete('/social-media/{social:id}', [SocialmediaController::class, 'destroy'])->middleware('auth');

// blog-------------------------------------------------------------------------------
Route::get('/blog', [BlogController::class, 'index'])->middleware('auth')->name('blog');
// add blog
Route::post('/blog', [BlogController::class, 'store'])->middleware('auth');
// edit blog
Route::get('/alkfj1jqdf8/{blog:id}', [BlogController::class, 'edit'])->middleware('auth');
// update blog
Route::put('/blog/{blog:id}', [BlogController::class, 'update'])->middleware('auth');
// hapus blog
Route::delete('/blog/{blog:id}', [BlogController::class, 'destroy'])->middleware('auth');

// sponsor--------------------------------------------------------------------------
Route::get('/sponsor', [SponsorController::class, 'index'])->middleware('auth')->name('sponsor');
// add sponsor
Route::post('/sponsor', [SponsorController::class, 'store'])->middleware('auth');
// edit sponsor
Route::get('/qilkaiqefl/{sponsor:id}', [SponsorController::class, 'edit'])->middleware('auth');
// update sponsor
Route::put('/sponsor/{sponsor:id}', [SponsorController::class, 'update'])->middleware('auth');
// hapus sponsor
Route::delete('/sponsor/{sponsor:id}', [SponsorController::class, 'destroy'])->middleware('auth');