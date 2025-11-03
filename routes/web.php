<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// use App\Http\Controllers\TeacherManagementController;

// Route::get('/teachers', [TeacherManagementController::class, 'index'])->name('teachers.index');
// Route::get('/teachers/create', [TeacherManagementController::class, 'create'])->name('teachers.create');
// Route::post('/teachers', [TeacherManagementController::class, 'store'])->name('teachers.store');
// Route::get('/teachers/{teacher}/edit', [TeacherManagementController::class, 'edit'])->name('teachers.edit');
// Route::put('/teachers/{teacher}', [TeacherManagementController::class, 'update'])->name('teachers.update');
// Route::delete('/teachers/{teacher}', [TeacherManagementController::class, 'destroy'])->name('teachers.destroy');

use App\Http\Controllers\StudentController;

Route::resource('students', StudentController::class);

// use App\Http\Controllers\StudentController;

// Route::get('/students', [StudentController::class, 'index'])->name('students.index');
