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




Auth::routes();

Route::get('/', 'FrontController@index')->name('home');
Route::get('/historique', 'FrontController@showAllSpends')->name('historique');
Route::get('/addspend', 'FrontController@addSpend')->name('addspend');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
