<?php
use Illuminate\Support\Facades\Route;
use App\Controllers\SuscriptionController;
use App\Http\Controllers\FoodController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('suscriptions', SuscriptionController::class);
Route::resource('foods', FoodController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
