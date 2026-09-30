<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class, 'homepage'])->name('home');

Route::get('/articles', [ArticleController::class, 'index'])->name('articoli');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('dettaglio');