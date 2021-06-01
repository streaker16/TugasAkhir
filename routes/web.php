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

Route::get('/admin', 'AdminController@index');

Route::get('/admin/gallery', 'AdminGalleryController@index');
Route::get('/admin/gallerytambah', 'AdminGalleryController@create');
Route::post('/admin/gallerytambah', 'AdminGalleryController@store');
Route::get('/admin/{id}/deletegallery', 'AdminGalleryController@destroy');

Route::get('/admin/produk', 'AdminProdukController@index');
Route::get('/admin/produktambah', 'AdminProdukController@create');
Route::post('/admin/produktambah', 'AdminProdukController@store');
Route::get('/admin/{id}/editproduk', 'AdminProdukController@edit');
Route::post('/admin/{id}/editproduk', 'AdminProdukController@update');
Route::get('/admin/{id}/deleteproduk', 'AdminProdukController@destroy');

Route::get('/admin/news', 'AdminNewsController@index');
Route::get('/admin/newstambah', 'AdminNewsController@create');
Route::post('/admin/newstambah', 'AdminNewsController@store');
Route::get('/admin/{id}/editnews', 'AdminNewsController@edit');
Route::post('/admin/{id}/editnews', 'AdminNewsController@update');
Route::get('/admin/{id}/deletenews', 'AdminNewsController@destroy');

Route::get('/admin/document', 'AdminDocumentController@index');
Route::get('/admin/documenttambah', 'AdminDocumentController@create');
Route::post('/admin/documenttambah', 'AdminDocumentController@store');
Route::get('/admin/{id}/deletedocument', 'AdminDocumentController@destroy');

Route::get('/admin/list_user', 'ListUserController@index');
Route::get('/admin/{id}/deleteuser', 'ListUserController@destroy');
Route::get('/admin/list_user/edit/{id}', 'ListUserController@edit');
Route::get('/admin/list_user/aktifkan/{id}', 'ListUserController@update');



// Route User
Auth::routes();


Route::post('/postlogin', 'AuthController@postlogin');
Route::post('/postregister', 'AuthController@postregister');
Route::get('/kabupaten/{id}', 'AuthController@getKotaByProvinsi');
Route::get('/kecamatan/{id}', 'AuthController@getKotaByKabupaten');
Route::get('/desa/{id}', 'AuthController@getKotaByKecamatan');
Route::get('/logout', 'AuthController@logout');

Route::get('/', 'HomeController@index');
Route::get('/about', 'PagesController@about');

Route::get('/produk', 'ProdukController@index');
Route::get('/produk/{id}', 'ProdukController@filter');
Route::get('/produklainnya', 'ProdukController@lainnya');
Route::get('/produklainnya/{id}', 'ProdukController@filterlainnya');
Route::get('/produk/{id}/detailproduk', 'ProdukController@show');

Route::get('/news', 'NewsController@index');
Route::get('/news/newslainnya', 'NewsController@lainnya');
Route::get('/news/{id}/detailnews', 'NewsController@show');

Route::get('/document', 'DocumentController@index');
Route::get('/gallery', 'galleryController@index');
Route::get('/contact', 'PagesController@contact');

// Route::get('/home', 'HomeController@index')->name('home');
