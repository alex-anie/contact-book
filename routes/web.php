<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Models\Contact;

Route::get('/', [ContactController::class, 'index']);
Route::get('/create', [ContactController::class, 'create']);
Route::get('/show/{id}', [ContactController::class, 'show']);
Route::get('/edit', [ContactController::class, 'edit']);

