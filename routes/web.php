<?php

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

Route::get('/ss', function () {
    return view('user.lihat');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/barang', 'BarangController');
Route::resource('/supplier', 'supplierController');
Route::resource('/transaksipenjualan', 'transaksipenjualanController');
Route::resource('/transaksipembelian', 'transaksipembelianController');
Route::resource('/kontak', 'KontakController');

Route::resource('pembelian', 'pembelianController');
Route::post('pembelian/transaksipembelian','pembelianController@index2');


Route::get('penjualan', 'penjualanController@index');
Route::post('penjualan/transaksipenjualan','penjualanController@index2');


Route::get('/','UserController@home');
Route::get('/product','UserController@product');
Route::get('/contact','UserController@kontak');
Route::get('/about','UserController@tentang');
Route::get('/kategoris/{id}','UserController@kategoris');
Route::get('/lihat/{id}','UserController@lihat');

Route::get('/member' , function()
{
	return view('errors.404');
});