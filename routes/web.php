<?php

use App\Http\Controllers\Book\Classification\MainClassificationController;
use App\Http\Controllers\Book\Classification\SubClassificationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Book\BookController;
use App\Http\Controllers\User\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('main-classifications', MainClassificationController::class);
Route::resource('sub-classifications', SubClassificationController::class);
Route::resource('books', BookController::class);
Route::resource('users', UserController::class);

