<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;
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
    return view('dashboard.layouts.layout');
});
Route::get('/add', function () {
    return view('add');
});





// Route::resource('bands', 'BandsController');
// Route::post('/bands', 'BandController@store');


// Route::resource("/bands", BandController::class);
Route::resource("/bands", BandController::class);