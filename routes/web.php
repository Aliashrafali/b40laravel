<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'Index'])->name('index');
Route::get('/About', [HomeController::class,'About'])->name('About');
Route::get('/create', [HomeController::class, 'Create'])->name('create');
Route::post('/addstudent', [HomeController::class, 'Student'])->name('addstudent');
