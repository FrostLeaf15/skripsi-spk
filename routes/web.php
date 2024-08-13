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
    return view('minuman/buavitaApple', [
        "tittle" => "Buavita"
    ]);
});

Route::get('/minuman/nescafe', function () {
    return view('minuman/nescafe', [
        "tittle" => "Nescafe"
    ]);
});

Route::get('/minuman/freshTea', function () {
    return view('minuman/freshTea', [
        "tittle" => "Fresh Tea"
    ]);
});

Route::get('/minuman/abcKopiSusu', function () {
    return view('minuman/abcKopiSusu', [
        "tittle" => "ABC Kopi Susu"
    ]);
});

Route::get('/minuman/sprite', function () {
    return view('minuman/sprite', [
        "tittle" => "Sprite"
    ]);
});

Route::get('/minuman/youC1000', function () {
    return view('minuman/youC1000', [
        "tittle" => "You C1000"
    ]);
});

Route::get('/kebutuhandapur/nice', function () {
    return view('kebutuhandapur/nice', [
        "tittle" => "Nice"
    ]);
});

Route::get('/kebutuhandapur/rinso', function () {
    return view('kebutuhandapur/rinso', [
        "tittle" => "Rinso"
    ]);
});

Route::get('/kebutuhandapur/vape', function () {
    return view('kebutuhandapur/vape', [
        "tittle" => "One Push Vape"
    ]);
});

Route::get('/kebutuhandapur/stella', function () {
    return view('kebutuhandapur/stella', [
        "tittle" => "Stella"
    ]);
});

Route::get('/kebutuhandapur/sunlight', function () {
    return view('kebutuhandapur/sunlight', [
        "tittle" => "Sunlight"
    ]);
});

Route::get('/kebutuhandapur/soklin', function () {
    return view('kebutuhandapur/soklin', [
        "tittle" => "So Klin"
    ]);
});

Route::get('/kesehatan/antangin', function () {
    return view('kesehatan/antangin', [
        "tittle" => "Antangin"
    ]);
});

Route::get('/kesehatan/bodrex', function () {
    return view('kesehatan/bodrex', [
        "tittle" => "Bodrex"
    ]);
});

Route::get('/kesehatan/hotincream', function () {
    return view('kesehatan/hotincream', [
        "tittle" => "Hot In Cream"
    ]);
});

Route::get('/kesehatan/neurobion', function () {
    return view('kesehatan/neurobion', [
        "tittle" => "Neurobion"
    ]);
});

Route::get('/kesehatan/salonpas', function () {
    return view('kesehatan/salonpas', [
        "tittle" => "Salonpas"
    ]);
});

Route::get('/kesehatan/sangobion', function () {
    return view('kesehatan/sangobion', [
        "tittle" => "Sangobion"
    ]);
});

Route::get('/makanan/qtela', function () {
    return view('makanan/qtela', [
        "tittle" => "Qtela"
    ]);
});

Route::get('/makanan/kopiko', function () {
    return view('makanan/kopiko', [
        "tittle" => "Kopiko"
    ]);
});

Route::get('/makanan/happydent', function () {
    return view('makanan/happydent', [
        "tittle" => "Happydent"
    ]);
});

Route::get('/makanan/rebo', function () {
    return view('makanan/rebo', [
        "tittle" => "Kuaci Rebo"
    ]);
});

Route::get('/makanan/dorayaki', function () {
    return view('makanan/dorayaki', [
        "tittle" => "Sari Roti Dorayaki"
    ]);
});

Route::get('/makanan/rotitawar', function () {
    return view('makanan/rotitawar', [
        "tittle" => "Sari Roti Roti Tawar"
    ]);
});

Route::get('/makananHewan/meo', function () {
    return view('makananHewan/meo', [
        "tittle" => "Me-O"
    ]);
});

Route::get('/makananHewan/pedigree', function () {
    return view('makananHewan/pedigree', [
        "tittle" => "Pedigree"
    ]);
});

Route::get('/makananHewan/smartheartcreamy', function () {
    return view('makananHewan/smartheartcreamy', [
        "tittle" => "SmartHeart"
    ]);
});

Route::get('/makananHewan/smartheartadult', function () {
    return view('makananHewan/smartheartadult', [
        "tittle" => "SmartHeart"
    ]);
});

Route::get('/makananHewan/whiskas', function () {
    return view('makananHewan/whiskas', [
        "tittle" => "Whiskas"
    ]);
});

Route::get('/makananHewan/smartheartdog', function () {
    return view('makananHewan/smartheartdog', [
        "tittle" => "SmartHeart"
    ]);
});

Route::get('/personalcare/casablanca', function () {
    return view('personalcare/casablanca', [
        "tittle" => "Casablanca"
    ]);
});

Route::get('/personalcare/laurier', function () {
    return view('personalcare/laurier', [
        "tittle" => "Laurier"
    ]);
});

Route::get('/personalcare/nivea', function () {
    return view('personalcare/nivea', [
        "tittle" => "Nivea"
    ]);
});

Route::get('/personalcare/pantene', function () {
    return view('personalcare/pantene', [
        "tittle" => "Pantene"
    ]);
});

Route::get('/personalcare/lifeboy', function () {
    return view('personalcare/lifeboy', [
        "tittle" => "Lifeboy"
    ]);
});

Route::get('/personalcare/emina', function () {
    return view('personalcare/emina', [
        "tittle" => "Emina"
    ]);
});

Route::get('/input', function () {
    return view('input');
});
