<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//ブック一覧画面を表示
Route::get('/', [BookController::class, 'index'])->name('book.index');
Route::get('/new', [BookController::class, 'new'])->name('book.new');
Route::post('/create', [BookController::class, 'create'])->name('book.create');
Route::get('/{book}/edit', [BookController::class, 'edit'])->name('book.edit');
Route::patch('/{book}', [BookController::class, 'update'])->name('book.update');
Route::delete('/{book}', [BookController::class, 'destroy'])->name('book.destroy');
//Route::get('/', 'BookController@index') -> name('boo');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
