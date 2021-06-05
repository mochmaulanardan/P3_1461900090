<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\BarangController;

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
    return view('0090home');
});
Route::get('/0090dokter', function () {
    return view('0090dokter');
});
Route::get('/0090kamar', function () {
    return view('0090kamar');
});
Route::get('/0090pasien', function () {
    return view('0090pasien');
});
Route::get('/0090user', function () {
    return view('0090user');
});
Route::get('/0090dokter/dokter_tambah', function () {
    return view('dokter_tambah');
});
Route::get('/0090kamar/kamar_tambah', function () {
    return view('kamar_tambah');
});
Route::get('/0090pasien/pasien_tambah', function () {
    return view('pasien_tambah');
});
Route::get('/0090user/user_tambah', function () {
    return view('user_tambah');
});
Route::resource('dokter', 'app\Http\Controllers\BarangController::class');
