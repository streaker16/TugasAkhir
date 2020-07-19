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

Route::get('/admin', function () {
    return view('admin/default');
});

Route::get('/', function () {
    return view('user.home');
});

Route::get('/produk', function () {
    return view('user.produk');
});
Route::get('/produk/detailproduk', function () {
    return view('user.detailproduk');
});

Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/laporan', 'LaporanController@index');
Route::get('/laporan    /detaillaporan', 'LaporanController@show');
Route::get('/gallery', 'galleryController@index');
