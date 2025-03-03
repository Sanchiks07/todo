<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/why', function () {
    return view('why');
});

Route::get('/apple', function () {
    return view('apple');
});

Route::get('/store', function () {
    return view('store');
});

Route::get('/mac', function () {
    return view('mac');
});

Route::get('/iphone', function () {
    return view('iphone');
});

Route::get('/watch', function () {
    return view('watch');
});

Route::get('/airpods', function () {
    return view('airpods');
});

Route::get('/support', function () {
    return view('support');
});