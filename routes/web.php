<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


Route::get('/',function(){
    return view('welcome');
});

// create operation
Route::get('/books/create', [BookController::class,'create']);
Route::post('/books/store', [BookController::class,'store']);


//show operation
Route::get('/books/index', [BookController::class,'index']);


//update operatyion
Route::get('/books/update/{id}', [BookController::class,'update']);
Route::post('/books/update', [BookController::class,'execute']);

//delete operation
Route::delete('/books/delete/{id}', [BookController::class,'destroy']);
