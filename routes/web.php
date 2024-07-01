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
Route::get('/comics', function () {
    return view('home', config('store'));
});

Route::get('/comics/{indice}', function ($indice) {
    $fumetto = config("store.comics");
    if (array_key_exists($indice, $fumetto)) {
        return view("comic", $fumetto[$indice], config('store'));
    } else {
        abort(404);
    }
})->name('comic');
