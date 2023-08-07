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
    return view('app');
});

Route::get('/show', function () {
    return view('show');
});

Route::get('/studio', function () {
    return view('studio');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/verification', function () {
    return view('verification');
});

Route::get('/ticket', function () {
    return view('ticket');
});

Route::get('/edit-profile', function () {
    return view('edit-profile');
});

Route::get('/forgot-password', function () {
    return view('forgot-password');
});

Route::get('/landing-forgot-password', function () {
    return view('landing-forgot-password');
});

Route::get('/addEmail', function () {
    return view('addEmail');
});

Route::get('/kebijakanPrivasi', function () {
    return view('kebijakanPrivasi');
});

Route::get('/syaratKetentuan', function () {
    return view('syaratKetentuan');
});
