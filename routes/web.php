<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorBookController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

*/

Route::get('/', function () {
    return view('welcome');
});

//Autores
Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
Route::get('/authors/{id}', [AuthorController::class, 'edit'])->name('authors.edit');
Route::delete('/authors/{id}', [AuthorController::class, 'destroy'])->name('authors.destroy');
Route::put('/authors/{id}', [AuthorController::class, 'update'])->name('authors.update');

//Libros

Route::get('/books', [BookController::class,'index'])->name('books.index');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{id}', [BookController::class,'edit'])->name('books.edit');
Route::put('/books/{id}', [BookController::class,'update'])->name('books.update');
Route::delete('/books/{id}', [BookController::class,'destroy'])->name('books.destroy');

//AuthorBooks
Route::get('/author_books', [AuthorBookController::class,'index'])->name('author_books.index');
Route::post('/author_books', [AuthorBookController::class, 'store'])->name('author_books.store');
