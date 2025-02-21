<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CategoryController;


Route::get('/',function(){
    return view('welcome');
});

Route::get('/auth/register', [AuthController::class,'register'])->name("auth.register");
Route::get('/auth/login', [AuthController::class,'login'])->name("auth.login");
Route::get('/auth/logout', [AuthController::class,'logout'])->name("auth.logout");

Route::post('/auth/handleRegister', [AuthController::class,'handleRegister']);
Route::post('/auth/handleLogin', [AuthController::class,'handleLogin'])->name("auth.handleLogin");


// create operation
Route::get('/books/create', [BookController::class,'create']);
Route::post('/books/store', [BookController::class,'store']);

Route::get('/authors/create', [AuthorController::class,'create']);
Route::post('/authors/store', [AuthorController::class,'store']);

Route::get('/students/create', [StudentController::class,'create']);
Route::post('/students/store', [StudentController::class,'store']);


Route::get('/categories/create', [CategoryController::class,'create']);
Route::post('/categories/store', [CategoryController::class,'store']);

//show operation
Route::get('/books/index', [BookController::class,'index']);

Route::get('/authors/index', [AuthorController::class,'index']);

Route::get('/students/index', [StudentController::class,'index']);

Route::get('/categories/index', [CategoryController::class,'index']);

//update operatyion
Route::get('/books/update/{id}', [BookController::class,'update']);
Route::post('/books/update', [BookController::class,'execute']);

Route::get('/authors/update/{id}', [AuthorController::class,'update']);
Route::post('/authors/update', [AuthorController::class,'execute']);

Route::get('/students/update/{id}', [StudentController::class,'update']);
Route::post('/students/update', [StudentController::class,'execute']);

Route::get('/categories/update/{id}', [CategoryController::class,'update']);
Route::post('/categories/update', [CategoryController::class,'execute']);


//delete operation
Route::delete('/books/delete/{id}', [BookController::class,'destroy']);

Route::delete('/authors/delete/{id}', [AuthorController::class,'destroy']);

Route::delete('/students/delete/{id}', [StudentController::class,'destroy']);

Route::delete('/categories/delete/{id}', [CategoryController::class,'destroy']);


Route::get('/books/show/{id}', [BookController::class,'show']);

