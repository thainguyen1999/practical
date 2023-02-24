<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
///

Route::prefix('/')->group(function() {
    Route::get('',[\App\Http\Controllers\HomeController::class,'listStudents'])->name('listStudents');
    Route::get('create',[\App\Http\Controllers\HomeController::class,'createStudents'])->name('createStudents');
    Route::post('create',[\App\Http\Controllers\HomeController::class,'addStudents']);
    Route::get('update/{id}',[\App\Http\Controllers\HomeController::class,'getUpdateStudents'])->name('Students.getUpdate');
    Route::post('update/{id}',[\App\Http\Controllers\HomeController::class,'updateStudents'])->name('Students.update');
    Route::get('delete/{id}', [\App\Http\Controllers\HomeController::class, 'deleteStudents'])->name('Students.delete');
});
