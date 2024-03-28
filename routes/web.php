<?php

use Illuminate\Support\Facades\Route;


//
Route::get('/news', [App\Http\Controllers\BlogController::class, 'index'])->name('news');
//Route::get('/pdf', [App\Http\Controllers\PdfController::class, 'index'])->name('pdf');

//Route::view('/', 'pages.index')->name('index');

Route::view('/about', 'pages.about')->name('about');
Route::view('/cursus', 'pages.cursus')->name('cursus');
Route::view('/', 'pages.index')->name('/');
