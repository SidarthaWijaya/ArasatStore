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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/shop/input/{id}', function () {
//     return view('/shop/input/{id}');
// });

//menampilkan semua data yang terdapat pada table product
Route::get('/', function () {
    return view('shop');
});

Route::post('/','productController@getData');


// menampilkan product berdasarkan nama barang 
Route::get('/product/{product_url}','ProductController@getDatabyId')->name('shop');

// menginput data pengiriman
Route::get('/pengiriman', function () {
    return view('pengiriman');
});

Route::get('/data', function () {
    return view('data');
});



// Route::get('/invoice', function () {
//     return view('invoice');
// });'

Route::get('/invoice','UserController@invoice');

Route::get('/search', 'ProductController@search')->name('search');

Route::get('/order', function () {
    return view('order');
});

// Route::get('/search', function () {
//     return view('search');
// });

Route::get('/pengiriman', 'CheckOngkirController@index');
Route::post('/pengiriman', 'CheckOngkirController@check_ongkir');
Route::get('/cities/{province_id}', 'CheckOngkirController@getCities');