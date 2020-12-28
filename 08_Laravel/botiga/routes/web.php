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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('empresa')->group(function(){

    Route::get('quisom','FrontendController@quisom')->name('quisom');
    Route::get('filosofia', 'FrontendController@filosofia')->name('filosofia');
    Route::get('sostenibilitat', 'FrontendController@sostenibilitat')->name('sostenibilitat');
    Route::get('equip', 'FrontendController@equip')->name('equip');
    Route::get('contacte', 'FrontendController@contacte')->name('contacte');

    // Alimentació
    Route::get('alimentacio', 'FrontendController@alimentacio')->name('alimentacio');

});

Route::get('categories/{id}','FrontendController@categoria')->name('categoria');
Route::get('products/{id}','FrontendController@product')->name('product');

