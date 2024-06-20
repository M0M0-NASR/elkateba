<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnbarController;
use App\Http\Controllers\SaryaController;
use App\Http\Controllers\FaselaController;
use App\Http\Controllers\StudentController;

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

Route::resource('student',StudentController::class,);
Route::resource('fasela',FaselaController::class,);
Route::resource('sarya',SaryaController::class);
Route::resource('anbar',AnbarController::class,);
