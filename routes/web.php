<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\artCotroller;
use App\Http\Controllers\testController;
use App\Http\Controllers\recController;
use App\Http\Controllers\regController;

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

Route::get('/', [welcomeController::class, 'welcome']);

Route::get('/articles', [artCotroller::class, 'article']);

Route::get('/test', [testController::class, 'tests']);

Route::get('/recover', [recController::class, 'recover']);

Route::get('/reg', [regController::class, 'reg']);
