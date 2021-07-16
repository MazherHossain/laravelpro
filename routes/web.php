<?php

use Illuminate\Support\Facades\Route;

Route::get('/student', [App\Http\Controllers\StudentController::class,'index']) -> name('student.index');
Route::get('/student/create', [App\Http\Controllers\StudentController::class,'create']) -> name('student.create');
Route::get('/student/edit', [App\Http\Controllers\StudentController::class,'edit']) -> name('student.edit');
Route::get('/student/show', [App\Http\Controllers\StudentController::class,'show']) -> name('student.show');
