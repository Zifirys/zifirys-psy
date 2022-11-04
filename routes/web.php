<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\artCotroller;
use App\Http\Controllers\testController;
use App\Http\Controllers\recController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;


Route::get('/', [indexController::class, 'index'])->name('home');


Route::prefix('user')->middleware('auth', 'active')->group(function(){
	//Route::redirect('/user', '/user/posts')->name('user');

	Route::get('articles', [artCotroller::class, 'index'])->name('article')->withoutMiddleware('auth')->withoutMiddleware('active');
	Route::get('articles/create', [artCotroller::class, 'create'])->name('articles.create');
	Route::post('articles', [artCotroller::class, 'store'])->name('articles.store');
	Route::get('articles/{post}', [artCotroller::class, 'show'])->name('articles.show');
	Route::get('articles/{post}/edit', [artCotroller::class, 'edit'])->name('articles.edit');
	Route::put('articles/{post}', [artController::class, 'update'])->name('articles.update');
	Route::delete('articles/{post}', [artController::class, 'delete'])->name('articles.delete');
});



Route::prefix('admin')->middleware('auth', 'active', 'admin')->group(function(){
	
});



Route::middleware('guest')->group( function(){

	Route::get('register', [registerController::class, 'index'])->name('register');
	Route::post('register/submit',  [regController::class, 'submit'])->name('register_form');

	Route::get('login', [loginController::class, 'index'])->name('login');
});




Route::get('test', [testController::class, 'tests'])->name('test');
Route::get('test/create', [testController::class, 'create'])->name('test.create');

Route::get('recover', [recController::class, 'recover'])->name('recover');

