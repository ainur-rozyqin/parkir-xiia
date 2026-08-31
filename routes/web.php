<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('Login');
});

Route::get('/kendaraan', function () {
    return view('Kendaraan');
});

Route::get('/index',function () {
    return view('Index');
});
Route::get('/dasboard',function () {
    return view('Dasboard');
});




