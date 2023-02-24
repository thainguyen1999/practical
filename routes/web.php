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

Route::prefix('/')->group(function() {
    Route::get('',[HomeController::class,'listStudents'])->name('listStudents');
    Route::get('create',[HomeController::class,'createStudents'])->name('createStudents');
    Route::post('create',[HomeController::class,'addStudents']);
    Route::get('update/{id}',[HomeController::class,'getUpdateStudents'])->name('Students.getUpdate');
    Route::post('update/{id}',[HomeController::class,'updateStudents'])->name('Students.update');
    Route::get('delete/{id}', [HomeController::class, 'deleteStudents'])->name('Students.delete');
});
