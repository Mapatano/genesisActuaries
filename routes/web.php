<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\langController;

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

Route::get('/home', function () {
    return view('home');
});


Route::get('/home', [LangController::class, 'index']);
Route::get('/change', [LangController::class, 'change'])->name('changeLang');

  
