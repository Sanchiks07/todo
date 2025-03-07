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

// apple store
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

// todo
Route::get('/todos', [ToDoController::class, 'index']);
Route::get('/todos/create', [ToDoController::class, 'create']);
Route::get('/todos/{todo}', [ToDoController::class, 'show']);
Route::post('/todos', [ToDoController::class, 'store']);
Route::get('/todos/{todo}/edit', [ToDoController::class, 'store']);
Route::put('/todos/{todo}', [ToDoController::class, 'update']);

// diary
Route::get('/diaries', [DiaryController::class, 'index']);
Route::get('/diaries/create', [DiaryController::class, 'create']);
Route::get('/diaries/{diary}', [DiaryController::class, 'show']);
Route::post('/diaries', [DiaryController::class, 'store']);
Route::get('/diaries/{diary}/edit', [DiaryController::class, 'show']);