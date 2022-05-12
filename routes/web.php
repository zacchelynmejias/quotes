<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\QuotesController;


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

Route::resource('/home', QuotesController::class);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/front', [HomeController::class, 'front']);
Route::get('/', [FrontController::class, 'front']);
Route::post('/search', [FrontController::class, 'search']);
Route::get('/load_more', [FrontController::class, 'loadMore'])->name('load_more');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
