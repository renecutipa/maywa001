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

Route::get('/', function () {
    return view('home');	
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/welp/{filter}', 'HomeController@getInfo');
Route::get('/entregar/{id}', 'HomeController@entregar');

Route::get('/listar', 'HomeController@listar');

Route::get('/reporte', 'HomeController@reporte')->name('reporte');


//Products
/*
Route::post('reuniones/store', 'ReunionController@store')->name('products.store');
Route::get('reuniones', 'ReunionController@index')->name('products.index');
Route::put('reuniones/{reunion}', 'ReunionController@update')->name('products.update');
Route::get('reuniones/{reunion}', 'ReunionController@show')->name('products.show');
Route::delete('reuniones/{reunion}', 'ReunionController@destroy')->name('products.destroy');
Route::get('reuniones/{reunion}/edit', 'ReunionController@edit')->name('products.edit');*/

Route::resource('/reunion','ReunionController');
