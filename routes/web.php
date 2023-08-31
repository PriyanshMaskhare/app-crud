<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;



Route::get('/',[StudentController::class,'create'])->name('student.create');
Route::post('/',[StudentController::class,'store'])->name('student.store');
Route::get('/{student}/edit',[StudentController::class,'edit'])->name('student.edit');
Route::put('/{student}/update',[StudentController::class,'update'])->name('student.update');
Route::delete('/{student}/delete',[StudentController::class,'delete'])->name('student.delete');
