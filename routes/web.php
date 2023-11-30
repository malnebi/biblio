<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/{days}', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/privacy', [App\Http\Controllers\PageController::class, 'privacy'])->name('privacy');
Route::get('/about-app', [App\Http\Controllers\PageController::class, 'aboutApp'])->name('about');
Route::get('/books/list', [App\Http\Controllers\PageController::class, 'bookList'])->name('bookList');

Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('clients', App\Http\Controllers\ClientController::class);

Route::delete('/clients/{id}', [App\Http\Controllers\ClientController::class, 'destroy']);
Route::get('/clients/{id}/edit', [App\Http\Controllers\ClientController::class, 'edit']);
Route::put('/clients/{id}', [App\Http\Controllers\ClientController::class, 'update']);


Route::resource('books', App\Http\Controllers\BookController::class);
Route::get('/books/{id}/edit', [App\Http\Controllers\BookController::class, 'edit']);
Route::put('/books/{id}', [App\Http\Controllers\BookController::class, 'update']);

Route::resource('loans', App\Http\Controllers\LoanController::class);
Route::get('/loans/create/{client_id}', [App\Http\Controllers\LoanController::class, 'create']);


