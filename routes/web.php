<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

// Get all students
Route::get('/students', function () {
    $students = DB::table('students')->get();
    return response()->json(['students' => $students]);
});

// Create a new student
Route::post('/students', function () {
    $data = request()->only(['name', 'age']);
    $id = DB::table('students')->insertGetId($data);
    $data['id'] = $id;
    return response()->json(['message' => 'Student created successfully', 'data' => $data]);
});

// Delete a student by ID
Route::delete('/students/{id}', function ($id) {
    $deleted = DB::table('students')->where('id', $id)->delete();
    if ($deleted) {
        return response()->json(['message' => 'Student deleted successfully']);
    }
    return response()->json(['message' => 'Student not found'], 404);
});

// Update a student by ID
Route::patch('/students/{id}', function ($id) {
    $data = request()->only(['name', 'age']);
    $updated = DB::table('students')->where('id', $id)->update($data);
    if ($updated) {
        $student = DB::table('students')->where('id', $id)->first();
        return response()->json(['message' => 'Student updated successfully', 'data' => $student]);
    }
    return response()->json(['message' => 'Student not found'], 404);
});

// Get all teachers
Route::get('/teachers', function () {
    $teachers = DB::table('teachers')->get();
    return response()->json(['teachers' => $teachers]);
});
