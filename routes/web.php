<?php

use App\Http\Controllers\SendEmailController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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


Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('welcome');
Route::get('/university/{id}', [App\Http\Controllers\MainController::class, 'detail'])->name('detail');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/home', [App\Http\Controllers\HomeController::class, 'deleter'])->name('home.deleter');

Route::post('/rectorApplicationChanger', [App\Http\Controllers\HomeController::class, 'rectorApplicationChanger'])->name('home.rectorApplicationChanger');

Route::post('/transcriptChanger', [App\Http\Controllers\HomeController::class, 'transcriptChanger'])->name('home.transcriptChanger');

Route::post('/letterChanger', [App\Http\Controllers\HomeController::class, 'letterChanger'])->name('home.letterChanger');

Route::post('/motivationChanger', [App\Http\Controllers\HomeController::class, 'motivationChanger'])->name('home.motivationChanger');

Route::post('/englishConfChanger', [App\Http\Controllers\HomeController::class, 'englishConfChanger'])->name('home.englishConfChanger');

Route::post('/passportScanChanger', [App\Http\Controllers\HomeController::class, 'passportScanChanger'])->name('home.passportScanChanger');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

Route::get('/contacts', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');

Route::get('/apply', [App\Http\Controllers\ApplyController::class, 'index'])->name('apply');

Route::post('/apply', [App\Http\Controllers\ApplyController::class, 'store'])->name('apply.store');

Route::get('/applications', [App\Http\Controllers\ApplicationsController::class, 'index'])->name('applications');

Route::get('/applications/{id}', [App\Http\Controllers\ApplicationsController::class, 'application'])->name('application');

Route::post('/applications/status', [App\Http\Controllers\ApplicationsController::class, 'status'])->name('application.status');

Route::get('/universities', [App\Http\Controllers\UniversitiesController::class, 'index'])->name('universities');

Route::get('/universities/create', [App\Http\Controllers\UniversitiesController::class, 'create'])->name('universities.create');

Route::post('/universities/create', [App\Http\Controllers\UniversitiesController::class, 'store'])->name('universities.store');

Route::get('/toiitu', [App\Http\Controllers\ToIITUController::class, 'index'])->name('toiitu');

Route::get('/export-table', 'ExportController@exportTable');

Route::get('send-email', [SendEmailController::class, 'sendEmail']);

Route::get('/export', function() {return Excel::download(new \App\Exports\ApplyExport(), 'apply.xlsx');})->name('export');
