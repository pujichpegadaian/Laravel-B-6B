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
    return view('contact');
});

Route::get('/message', function () {
    return view('message');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/message', 'ContactController@Tampil') ->name('messageshow');

Route::post('/addcontact', 'ContactController@Simpan');