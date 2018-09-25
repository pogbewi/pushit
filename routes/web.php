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

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/sign-up', function () {
    return view('requester.auth.registration');
});

Route::get('/sign-in', function () {
    return view('requester.auth.login');
});