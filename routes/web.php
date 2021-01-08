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

Route::get('/admin/gallery', 'AdminGalleryController@index');
Route::post('/admin/gallery/upload', 'AdminGalleryController@store');

Route::get('/admin/produk', 'AdminProdukController@index');
Route::post('/admin/produk/upload', 'AdminProdukController@store');

Route::get('/admin/news', 'AdminNewsController@index');
Route::post('/admin/news/upload', 'AdminNewsController@store');

Route::get('/admin/document', 'AdminDocumentController@index');
Route::post('/admin/document/upload', 'AdminDocumentController@store');

Route::get('/admin/admin', function () {
    return view('admin/admin');
});



// Route User

Route::get('/', 'HomeController@index');
Route::get('/about', 'PagesController@about');
Route::get('/produk', 'ProdukController@index');
Route::get('/produk/detailproduk', 'ProdukController@show');
Route::get('/news', 'NewsController@index');
Route::get('/news/detailnews', 'NewsController@show');
Route::get('/document', 'DocumentController@index');
Route::get('/gallery', 'galleryController@index');
Route::get('/contact', 'PagesController@contact');
