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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/develop', function () {
    return view('develop');
});

Route::get('/develop ke 3', function () {
    return view('develop ke 3');
});

Route::get('/commit error', function () {
    return view('commit error');
});

Route::get('/commit berhasil', function () {
    return view('commit berhasil');
});
