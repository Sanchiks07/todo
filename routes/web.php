<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;

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

Route::get('/airpods', function () {
    return view('airpods');
});

Route::get('/support', function () {
    return view('support');
});

Route::get('/todos', [ToDoController::class, 'index']);
Route::get('/diaries', [DiaryController::class, 'index']);

Route::get('/todos/{todo}', [ToDoController::class, 'show']);