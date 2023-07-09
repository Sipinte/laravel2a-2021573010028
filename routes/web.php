<?php

use Illuminate\Support\Facades\Route;

// routes/web.php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\BookController;

// ...

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::get('/library', [BookController::class, 'index'])->name('library')->middleware('auth');
Route::post('/borrow/{book}', [BookController::class, 'borrow'])->name('borrow')->middleware('auth');
Route::get('/history', [BookController::class, 'history'])->name('history')->middleware('auth');
Route::post('/books/{borrowing}/return', [BookController::class, 'returnBook'])->name('books.return');


// Redirect to login page after successful logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
