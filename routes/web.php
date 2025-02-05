<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/books/create', [BookController::class,'create']);
Route::post('/books/store', [BookController::class,'store']);
Route::get('/books/index', [BookController::class,'index']);
Route::get('/',function(){
     return view('welcome');
});

