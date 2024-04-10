<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;

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

//Route::get('/personal', [App\Http\Controllers\PersonalController::class, 'index'])->name('personal');

Route::resource('/personals', PersonalController::class);

Route::get('/personal', [App\Http\Controllers\PersonalController::class, 'index'])->name('persona');
Route::get('/personal/crear', [App\Http\Controllers\PersonalController::class, 'create'])->name('create');