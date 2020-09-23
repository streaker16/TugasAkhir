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

// Route Admin
Route::get('/admin', function () {
    return view('admin/content');
});
Route::get('/admin/gallery', function () {
    return view('admin/gallery');
});
Route::get('/admin/produk', function () {
    return view('admin/produk');
});
Route::get('/admin/news', function () {
    return view('admin/news');
});
Route::get('/admin/document', function () {
    return view('admin/document');
});



// Route User
Route::get('/', function () {
    return view('user.home');
});

Route::get('/produk', function () {
    return view('user.produk');
});
Route::get('/produk/detailproduk', function () {
    return view('user.detailproduk');
});
Route::get('/document', function () {
    return view('user.document');
});

Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/news', 'NewsController@index');
Route::get('/news/detailnews', 'NewsController@show');
Route::get('/gallery', 'galleryController@index');
