<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Show all
Route::get('/', [ContactController::class, 'index']);

// Create
Route::get('/create', [ContactController::class, 'create']);
Route::post('/contacts', [ContactController::class, 'store']);

// Edit & Update
Route::get('/{id}/edit', [ContactController::class, 'edit']);
Route::patch('/{id}', [ContactController::class, 'update']);

// Show single
Route::get('/show/{id}', [ContactController::class, 'show']);

// Delete
Route::delete('/{id}', [ContactController::class, 'destroy']);