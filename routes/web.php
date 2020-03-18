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

Route::get('/web', function () {
    return view('web');
});

Route::get('/edu', function () {
    return view('edu');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/research', function () {
    return view('research');
});

Route::get('/service2', function () {
    return view('service2');
});

Route::get('/rhu', function () {
    return view('rhu');
});


Route::get('/intro', function () {
    return view('intro');
});