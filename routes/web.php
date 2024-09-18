<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/ney', function () {
    return view('ney');
})->name('ney');

Route::get('/messi', function () {
    return view('messi');
})->name('messi');

Route::get('/', function () {
    return view('ronaldo');
})->name('ronaldo');