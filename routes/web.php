<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::get('/all-places', [\App\Http\Controllers\AllPlacesController::class,'index'])->name('places');

Route::get('/all-activities', [\App\Http\Controllers\AllActivitiesController::class,'index'])->name('activities');

Route::get('place/{id}', [\App\Http\Controllers\PlaceController::class,'index']);

Route::get('activity/{id}', [\App\Http\Controllers\ActivityController::class,'index']);

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
