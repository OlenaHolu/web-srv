<?php

use App\Http\Controllers\NoticiaController;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\search;

Route::get('/', [NoticiaController::class, 'index']);
Route::get('/search/{term}',[NoticiaController::class, 'search']);   
Route::get('/view/{noticia}',[NoticiaController::class, 'show']); 

//Route::resource('noticias', NoticiaController::class);
