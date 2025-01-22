<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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




Route::get('/', [BlogController::class, 'index'])->name('home');
Route::get('/posts', [BlogController::class, 'posts'])->name('posts');
Route::get('/contact', [BlogController::class, 'contact'])->name('contact');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/about', [BlogController::class, 'about'])->name('about');


//Rutas de login para back
Route::get('/login', [BlogController::class, 'login'])->name('login');
Route::post('/courses', [BlogController::class, 'store'])->name('store');

