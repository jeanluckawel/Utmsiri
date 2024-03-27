<?php

use Illuminate\Support\Facades\Route;


//
Route::get('/', [App\Http\Controllers\BlogController::class, 'index'])->name('index');
//Route::get('/pdf', [App\Http\Controllers\PdfController::class, 'index'])->name('pdf');

//Route::view('/', 'pages.index')->name('index');
