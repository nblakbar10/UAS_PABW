<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
	return view('login');
});

Route::get('/selamatdatang', function () {
    return view('selamatdatang');
});
Route::get('pilihan', function () {
    return view('pilihan');
});
Route::get('tentang', function () {
    return view('tentang');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('paketkursus', function () {
    return view('paketkursus');
});

Route::get('murid', 'App\Http\Controllers\MuridController@index');
Route::get('instruktur', 'App\Http\Controllers\InstrukturController@index');
Route::get('mobil', 'App\Http\Controllers\MobilController@index');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
