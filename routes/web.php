<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/show/{id}', function () {
    return view('show');
});

Route::get('/edit', function () {
    return view('edit');
});

