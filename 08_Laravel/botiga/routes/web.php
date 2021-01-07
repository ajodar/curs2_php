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



});

// Categories
Route::get('categories', 'FrontendController@categories')->name('categories');
Route::get('categories/{id}','FrontendController@categoria')->name('categoria');

//Productes
Route::get('productes', 'FrontendController@productes')->name('productes');
Route::get('products/search', 'FrontendController@productSearch')->name('product_search');
Route::post('products/resultSearch', 'FrontendController@productResultSearch')->name('product_result_search');
Route::get('products/{id}','FrontendController@product')->name('product');

//Botigues
Route::get('botigues', 'FrontendController@botigues')->name('botigues');
Route::get('botigues/search', 'FrontendController@botigaSearch')->name('botiga_search');
Route::post('botigues/result_search', 'FrontendController@botigaResultSearch')->name('botiga_result_search');
Route::get('botigues/{id}', 'FrontendController@botiga')->name('botiga');


//Routes admin
Route::prefix('admin')->group(function(){
    Route::get('categories/{category}/restore', 'CategoriesController@restore')->name('categories.restore');
    Route::resource('categories', 'CategoriesController');

    Route::get('shops/{shop}/restore','ShopsController@restore')->name('shops.restore');
    Route::resource('shops', 'ShopsController');

    Route::resource('employees', 'EmployeesController');

});

