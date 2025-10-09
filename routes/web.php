<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

1. Index
2. Guarde los datos 
3. Muestre datos**
4. edite
5. borre
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
Route::get('/authors/{id}', [AuthorController::class, 'edit'])->name('authors.edit');
Route::delete('/authors/{id}', [AuthorController::class, 'destroy'])->name('authors.destroy');
Route::put('/authors/{id}', [AuthorController::class, 'update'])->name('authors.update');

