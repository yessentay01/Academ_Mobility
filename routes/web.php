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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

Route::get('/contacts', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');

Route::get('/apply', [App\Http\Controllers\ApplyController::class, 'index'])->name('apply');

Route::get('/universities', [App\Http\Controllers\UniversitiesController::class, 'index'])->name('universities');

Route::get('/universities/create', [App\Http\Controllers\UniversitiesController::class, 'create'])->name('universities.create');
