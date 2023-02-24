<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\ArtistController;
use App\Models\Artist;
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

Route::get('/artists', function () {
    return view('artists');
});


Route::resource("/bands", BandController::class);
Route::resource("/users", UserController::class);
Route::resource("/", SongController::class);
Route::resource("/home", SongController::class);
Route::resource("/artists", ArtistController::class);
Route::resource("/songs", SongController::class);




Route::post('/songs/{id}/like', [SongController::class, 'like'])->name('likeSong');


// Route::get('/artists', [BandController::class, 'index'])->name('artists');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




