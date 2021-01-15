<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::group(['middleware' => 'auth'], function () {

        Route::get('/home', 'HomeController@index')->name('home');

    });


});

Route::get('crear_producte', 'HomeController@crearProducte')->name('crear_producte');






