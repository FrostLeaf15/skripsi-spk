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

Route::get('/makananHewan', function () {
    return view('makananHewan');
});

Route::get('/personalcare', function () {
    return view('personalcare');
});

Route::get('/kebutuhandapur', function () {
    return view('kebutuhandapur');
});

Route::get('/minuman/buavitaApple', function () {
    return view('minuman/buavitaApple');
});

Route::get('/minuman/nescafe', function () {
    return view('minuman/nescafe');
});

Route::get('/minuman/freshTea', function () {
    return view('minuman/freshTea');
});

Route::get('/minuman/abcKopiSusu', function () {
    return view('minuman/abcKopiSusu');
});

Route::get('/minuman/sprite', function () {
    return view('minuman/sprite');
});

Route::get('/minuman/youC1000', function () {
    return view('minuman/youC1000');
});

Route::get('/kebutuhandapur/nice', function () {
    return view('kebutuhandapur/nice');
});

Route::get('/kebutuhandapur/rinso', function () {
    return view('kebutuhandapur/rinso');
});

Route::get('/kebutuhandapur/vape', function () {
    return view('kebutuhandapur/vape');
});

Route::get('/kebutuhandapur/stella', function () {
    return view('kebutuhandapur/stella');
});

Route::get('/kebutuhandapur/sunlight', function () {
    return view('kebutuhandapur/sunlight');
});

Route::get('/kebutuhandapur/soklin', function () {
    return view('kebutuhandapur/soklin');
});

Route::get('/kesehatan/antangin', function () {
    return view('kesehatan/antangin');
});

Route::get('/kesehatan/bodrex', function () {
    return view('kesehatan/bodrex');
});

Route::get('/kesehatan/hotincream', function () {
    return view('kesehatan/hotincream');
});

Route::get('/kesehatan/neurobion', function () {
    return view('kesehatan/neurobion');
});

Route::get('/kesehatan/salonpas', function () {
    return view('kesehatan/salonpas');
});

Route::get('/kesehatan/sangobion', function () {
    return view('kesehatan/sangobion');
});

Route::get('/makanan/qtela', function () {
    return view('makanan/qtela');
});

Route::get('/makanan/kopiko', function () {
    return view('makanan/kopiko');
});

Route::get('/makanan/happydent', function () {
    return view('makanan/happydent');
});

Route::get('/makanan/rebo', function () {
    return view('makanan/rebo');
});

Route::get('/makanan/dorayaki', function () {
    return view('makanan/dorayaki');
});

Route::get('/makanan/rotitawar', function () {
    return view('makanan/rotitawar');
});

Route::get('/makananHewan/meo', function () {
    return view('makananHewan/meo');
});

Route::get('/makananHewan/pedigree', function () {
    return view('makananHewan/pedigree');
});

Route::get('/makananHewan/smartheartcreamy', function () {
    return view('makananHewan/smartheartcreamy');
});

Route::get('/makananHewan/smartheartadult', function () {
    return view('makananHewan/smartheartadult');
});

Route::get('/makananHewan/whiskas', function () {
    return view('makananHewan/whiskas');
});

Route::get('/makananHewan/smartheartdog', function () {
    return view('makananHewan/smartheartdog');
});

Route::get('/personalcare/casablanca', function () {
    return view('personalcare/casablanca');
});

Route::get('/personalcare/laurier', function () {
    return view('personalcare/laurier');
});

Route::get('/personalcare/nivea', function () {
    return view('personalcare/nivea');
});

Route::get('/personalcare/pantene', function () {
    return view('personalcare/pantene');
});

Route::get('/personalcare/lifeboy', function () {
    return view('personalcare/lifeboy');
});

Route::get('/personalcare/emina', function () {
    return view('personalcare/emina');
});

Route::get('/input', function () {
    return view('input');
});
