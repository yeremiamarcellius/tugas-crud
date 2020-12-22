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

Route::get('/', 'ProductController@home')->name('producthome');
Route::get('/create', 'ProductController@create')->name('create'); 
Route::post('/store', 'ProductController@store')->name('store');
Route::get('/product/{id}', 'ProductController@show')->name('show');
Route::get('/product/edit/{id}', 'ProductController@edit')->name('edit');
Route::patch('/product/update/{id}', 'ProductController@update')->name('update');
Route::delete('/product/delete/{id}', 'ProductController@destroy')->name('delete');

//category

Route::get('/categories', 'CategoryController@index')->name('category');
Route::get('/categories/create', 'CategoryController@create')->name('createcategory'); 
Route::post('/categories/store', 'CategoryController@store')->name('storecategory');
Route::get('/categories/{id}', 'CategoryController@show')->name('showcategory');
Route::delete('/categories/delete/{id}', 'CategoryController@destroy')->name('deletecategory');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
