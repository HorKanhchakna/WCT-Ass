<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'getAllStudents']);
Route::post('/students', [StudentController::class, 'createStudent']);
Route::delete('/students/{id}', [StudentController::class, 'deleteStudent']);
Route::patch('/students/{id}', [StudentController::class, 'updateStudent']);