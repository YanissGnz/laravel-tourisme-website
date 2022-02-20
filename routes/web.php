<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::get('place/{id}', [\App\Http\Controllers\PlaceController::class,'index']);

Route::get('activity/{id}', [\App\Http\Controllers\ActivityController::class,'index'])->name('activity');
Route::get('activity/{id}#booking-form', [\App\Http\Controllers\ActivityController::class,'index'])->name('activity-to-form');

Route::get('/auth/register',[MainController::class, 'register'])->name('auth.register');

Route::get('/login', function () {
    return view('login');
});

Route::get('/all-places', [\App\Http\Controllers\AllPlacesController::class,'index'])->name('places');
Route::get('/all-activities', [\App\Http\Controllers\AllActivitiesController::class,'index'])->name('activities');

Route::post('/auth/check',[MainController::class, 'check'])->name('auth.check');

Route::post('/auth/save',[MainController::class,'save'])->name('auth.save');

Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');

Route::get('/all-places', [\App\Http\Controllers\AllPlacesController::class,'index'])->name('places');

Route::get('/all-activities', [\App\Http\Controllers\AllActivitiesController::class,'index'])->name('activities');

Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
    Route::get('/auth/register',[MainController::class, 'register'])->name('auth.register');
    Route::get('/auth/profil',[MainController::class, 'profil'])->name('profil');
    Route::get('activity/{id}/booking', [\App\Http\Controllers\ActivityController::class,'booking'])->name('activity.booking');
});
