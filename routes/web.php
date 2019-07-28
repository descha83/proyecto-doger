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
/* Rutas de Registro y Login */
Auth::routes();

Route::get('/fq', function () {
    return view('fq');
});
Route::get('/profile', 'PosteosController@index')->name('profile');

Route::get('/edit-profile', function () {
   return view('edit-profile');
});
Route::get('/logout', function () {
    return view('auth.register');
});


Route::resource('Post', 'posteosController');

Route::get('/home', 'HomeController@index')->name('home');
