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

Route::get('/', 'HomepageController@index')->name('homepage');
Route::get('/collections/{slug_kategoriadi}','KategoriController@index')->name('kategori');
Route::get('/products', 'urun');
Route::get('/cart', 'sepet');

