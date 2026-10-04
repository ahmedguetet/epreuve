<?php

use App\Http\Controllers\EprController;
use App\Http\Controllers\MatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/matiere', [MatController::class, 'index']);
Route::post('/matiere', [MatController::class, 'store']);

Route::get('/epreuve', [EprController::class, 'index']);
Route::post('/epreuve', [EprController::class, 'store']);