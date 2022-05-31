<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('beranda', [
        'title' => 'beranda',
    ]);
});

Route::get('/museum', function () {
    return view('museum', [
        'title' => 'museum',
    ]);
});

Route::get('/kuliner', function () {
    return view('kuliner', [
        'title' => 'kuliner',
    ]);
});

Route::get('/galeri', function () {
    return view('galeri', [
        'title' => 'galeri',
    ]);
});

Route::get('/rekreasi', function () {
    return view('rekreasi', [
        'title' => 'rekreasi',
    ]);
});

Route::get('/login', [LoginController::class, 'index']); 

/*
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/