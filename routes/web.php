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

Route::get('/about', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('menu');
});

Route::get('/minuman', function () {
    return view('minuman');
});

Route::get('/makanan', function () {
    return view('makanan');
});

Route::get('/kesehatan', function () {
    return view('kesehatan');
});

Route::get('/makananhewan', function () {
    return view('makananhewan');
});

Route::get('/personalcare', function () {
    return view('personalcare');
});

Route::get('/kebutuhandapur', function () {
    return view('kebutuhandapur');
});

Route::get('/input', function () {
    return view('input');
});
