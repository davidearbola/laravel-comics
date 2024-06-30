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
    return view('home', config('store'));
});

Route::get('/home', function () {
    return view('home', config('store'));
});

Route::get('/actioncomic', function () {
    return view('actioncomic', config('store'));
});
Route::get('/americanvampire', function () {
    return view('americanvampire', config('store'));
});
Route::get('/aquaman', function () {
    return view('aquaman', config('store'));
});
Route::get('/batgirl', function () {
    return view('batgirl', config('store'));
});
Route::get('/batman', function () {
    return view('batman', config('store'));
});
Route::get('/batmanbeyond', function () {
    return view('batmanbeyond', config('store'));
});
Route::get('/batmansuperman', function () {
    return view('batmansuperman', config('store'));
});
Route::get('/batmansupermanannual', function () {
    return view('batmansupermanannual', config('store'));
});
Route::get('/batmanjoker', function () {
    return view('batmanjoker', config('store'));
});
Route::get('/batmanthree', function () {
    return view('batmanthree', config('store'));
});
Route::get('/batmanwhite', function () {
    return view('batmanwhite', config('store'));
});
Route::get('/catwoman', function () {
    return view('catwoman', config('store'));
});
