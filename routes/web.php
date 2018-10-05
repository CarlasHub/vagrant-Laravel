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