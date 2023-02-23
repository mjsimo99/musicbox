<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

 
Route::resource("/bands", BandController::class);
Route::resource("/users", UserController::class);
Route::resource("/", SongController::class);
Route::resource("/home", SongController::class);
Route::resource("/songs", SongController::class);



Route::post('/songs/{id}/like', [SongController::class, 'like'])->name('likeSong');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



