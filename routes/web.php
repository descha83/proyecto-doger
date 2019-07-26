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
    return view('auth.register');
});
Route::post('/', function () {
    return view('auth.login');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/newsfeed', function () {
    return view('auth.newsfeed');
});
Route::get('/fq', function () {
    return view('fq');
});
Route::get('/profile', function () {
    return view('sprofile');
});
Route::get('/edit-profile', function () {
    return view('edit-profile');
});
Route::get('/logout', function () {
    return view('auth.register');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('Post', 'posteosController');
