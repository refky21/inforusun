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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::group(['prefix' => '/member'], function()
{
  Route::get('/', 'LoginPenyewaController@index')->name('member');
  Route::post('/validasi', 'LoginPenyewaController@validasi')->name('Login.Validasi');
  Route::get('/logout', 'LoginPenyewaController@logout')->name('Role.Simpan');
  Route::get('/edit/{id}', 'LoginPenyewaController@edit')->name('Role');
  Route::post('/update', 'LoginPenyewaController@update')->name('Role.Update');
  Route::get('/delete/{id}', 'LoginPenyewaController@delete');
});
