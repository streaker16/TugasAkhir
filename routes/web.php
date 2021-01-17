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
Route::get('/admin/gallerytambah', 'AdminGalleryController@create');
Route::post('/admin/gallerytambah', 'AdminGalleryController@store');
Route::get('/admin/{id}/deletegallery', 'AdminGalleryController@destroy');

Route::get('/admin/produk', 'AdminProdukController@index');
Route::get('/admin/produktambah', 'AdminProdukController@create');
Route::post('/admin/produktambah', 'AdminProdukController@store');
Route::get('/admin/{id}/deleteproduk', 'AdminProdukController@destroy');

Route::get('/admin/news', 'AdminNewsController@index');
Route::get('/admin/newstambah', 'AdminNewsController@create');
Route::post('/admin/newstambah', 'AdminNewsController@store');
Route::get('/admin/{id}/deletenews', 'AdminNewsController@destroy');

Route::get('/admin/document', 'AdminDocumentController@index');
Route::get('/admin/documenttambah', 'AdminDocumentController@create');
Route::post('/admin/documenttambah', 'AdminDocumentController@store');
Route::get('/admin/{id}/deletedocument', 'AdminDocumentController@destroy');

Route::get('/admin/admin', function () {
    return view('admin/admin');
});



// Route User

Route::post('/postlogin', 'AuthController@postlogin');

Route::get('/', 'HomeController@index');
Route::get('/about', 'PagesController@about');

Route::get('/produk', 'ProdukController@index');
Route::get('/produk/{id}/detailproduk', 'ProdukController@show');

Route::get('/news', 'NewsController@index');
Route::get('/news/{id}/detailnews', 'NewsController@show');

Route::get('/document', 'DocumentController@index');
Route::get('/gallery', 'galleryController@index');
Route::get('/contact', 'PagesController@contact');
