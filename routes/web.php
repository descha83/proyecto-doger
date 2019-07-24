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
//
// Route::get('/', function () {
//     return view('welcome');
// });

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
    return view('newsfeed');
});

Route::get('/fq', function () {
    return view('fq');
});

Route::get('/profile', function () {
    return view('profile');
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
/*
POST      | Post                   | Post.store       | App\Http\Controllers\posteosController@store                           | web          |
|        | GET|HEAD  | Post                   | Post.index       | App\Http\Controllers\posteosController@index                           | web          |
|        | GET|HEAD  | Post/create            | Post.create      | App\Http\Controllers\posteosController@create                          | web          |
|        | DELETE    | Post/{Post}            | Post.destroy     | App\Http\Controllers\posteosController@destroy                         | web          |
|        | PUT|PATCH | Post/{Post}            | Post.update      | App\Http\Controllers\posteosController@update                          | web          |
|        | GET|HEAD  | Post/{Post}            | Post.show        | App\Http\Controllers\posteosController@show                            | web          |
|        | GET|HEAD  | Post/{Post}/edit       | Post.edit        | App\Http\Controllers\posteosController@edit                            | web
*/
