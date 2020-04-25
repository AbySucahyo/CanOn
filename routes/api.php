<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
// });

//petugas
Route::post('register1','PetugasController@register');
Route::post('login1','PetugasController@login');
//pelanggan
Route::post('register2','PelangganController@register');
Route::post('login2','PelangganController@login');
Route::get('logout','PelangganController@logout');
Route::get('tes','PelangganController@tes');
//kantin
Route::post('addkantin','KantinController@create')->middleware('jwt.verify');
Route::get('getkantin','KantinController@get')->middleware('jwt.verify');
Route::delete('delkantin/{id}','KantinController@delete')->middleware('jwt.verify');
Route::post('upkantin/{id}','KantinController@update')->middleware('jwt.verify');
Route::get('showkantin/{id}','KantinController@show');
//item
Route::post('additem','ItemController@create')->middleware('jwt.verify');
Route::get('getitem','ItemController@get')->middleware('jwt.verify');
Route::delete('delitem/{id}','ItemController@delete')->middleware('jwt.verify');
Route::post('upitem/{id}','ItemController@update')->middleware('jwt.verify');
//transaksi
Route::post('addtrans','TransaksiController@create');
Route::post('additems','TransaksiController@additem');
Route::get('showtrans3','TransaksiController@show');
route::put('confirm/{id}','TransaksiController@confirmation')->middleware('jwt.verify');




