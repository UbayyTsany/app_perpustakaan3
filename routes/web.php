<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

// Mendaftarkan seluruh rute CRUD untuk /members
Route::resource('members', MemberController::class);
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoanController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', BookController::class);
Route::resource('categories', CategoryController::class)->except(['show']);
Route::resource('members', MemberController::class);
Route::resource('loans', LoanController::class);
Route::put('/loans/{id}/kembalikan', [LoanController::class, 'kembalikan'])
    ->name('loans.kembalikan');

// Route khusus admin (dari tugas Pertemuan 2)
Route::prefix('admin')->group(function () {
    Route::get('/info', function () {
        return 'Informasi Admin';
    });
});