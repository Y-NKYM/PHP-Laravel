<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\LoginController;

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

//管理者ルート
Route::prefix('admin')->group(function () {
  Route::get('/login', [LoginController::class, 'index'])->name('admin.login.index');
  Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
  Route::get('/logout', [LoginController::class, 'logout'])->name('admin.login.logout');
  
  Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('admin.auth');
});

//ブック一覧画面を表示
Route::get('/book', [BookController::class, 'index'])->name('book.index');
Route::get('/new', [BookController::class, 'new'])->name('book.new')->middleware('auth');
Route::post('/create', [BookController::class, 'create'])->name('book.create')->middleware('auth');
Route::get('/{book}/edit', [BookController::class, 'edit'])->name('book.edit')->middleware('auth');
Route::patch('/{book}', [BookController::class, 'update'])->name('book.update')->middleware('auth');
Route::delete('/{book}', [BookController::class, 'destroy'])->name('book.destroy')->middleware('auth');
//Route::get('/', 'BookController@index') -> name('boo');

Route::get('/image', [ImageController::class, 'index'])->name('image.index');
Route::post('/image', [ImageController::class, 'store'])->name('image.store');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
