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


Route::get('/', function () {
    return view('home');
});

//post request 
Route::post('/login', function () {
    return view('login');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::post('/contacts/submit', 'MessagesController@submit');
*/

Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contacts', 'PagesController@contacts');
//Route::get('/posts/index', 'PostsController@index');

// this will create all the routes for my posts controller 
//need to run php artisan route:list  and check if all are in place
Route::resource('posts', 'PostsController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
