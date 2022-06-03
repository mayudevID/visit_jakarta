<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); 
Route::post('/login', [LoginController::class, 'authenticate']); 
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'dashboard',
    ]);
})->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/', function () {
    return view('beranda' , [
        'title' => 'beranda',
    ]);
});

Route::get('/museum', [PostController::class, 'museum']);
Route::get('/museum/{post:slug}', [PostController::class, 'show']);

Route::get('/kuliner', [PostController::class, 'kuliner']);
Route::get('/kuliner/{post:slug}', [PostController::class, 'show']);

Route::get('/galeri' , [PostController::class, 'galeri']);
Route::get('/galeri/{post:slug}', [PostController::class, 'show']);

Route::get('/rekreasi', [PostController::class, 'rekreasi']);
Route::get('/rekreasi/{post:slug}', [PostController::class, 'show']);



/*
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/