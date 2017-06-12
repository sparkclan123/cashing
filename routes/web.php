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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>['auth']], function(){
Route::get('/cashing', 'CashingController@index');
Route::get('/cashing/create','CashingController@create');
Route::post('/cashing','CashingController@store');
Route::get('/cashing/{cashing}/edit','CashingController@edit');
Route::post('/cashing/{cashing}','CashingController@update');
Route::delete('/cashing/{cashing}','CashingController@destroy');
});
