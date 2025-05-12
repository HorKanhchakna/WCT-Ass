<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

$students = [
    ['id' => 1, 'name' => 'John Doe', 'age' => 20, 'grade' => 'A'],
    ['id' => 2, 'name' => 'Jane Smith', 'age' => 22, 'grade' => 'B'],
    ['id' => 3, 'name' => 'Sam Brown', 'age' => 19, 'grade' => 'C'],
];

Route::get('/students', function () use (&$students) {
    return response()->json(['students' => $students]);
});

Route::post('/students', function () use (&$students) {
    $data = request()->all();
    $data['id'] = end($students)['id'] + 1; 
    $students[] = $data;
    return response()->json(['message' => 'Student created successfully', 'data' => $data]);
});

Route::delete('/students/{id}', function ($id) use (&$students) {
    $index = array_search($id, array_column($students, 'id'));
    if ($index === false) {
        return response()->json(['message' => 'Student not found'], 404);
    }
    array_splice($students, $index, 1);
    return response()->json(['message' => 'Student deleted successfully']);
});

Route::patch('/students/{id}', function ($id) use (&$students) {
    $data = request()->all();
    $index = array_search($id, array_column($students, 'id'));
    if ($index === false) {
        return response()->json(['message' => 'Student not found'], 404);
    }
    $students[$index] = array_merge($students[$index], $data);
    return response()->json(['message' => 'Student updated successfully', 'data' => $students[$index]]);
});

Route::get('/teachers', function () {
    $data = [
        'teachers' => [
            ['name' => 'Mr. Smith', 'subject' => 'Math', 'experience' => 5],
            ['name' => 'Ms. Johnson', 'subject' => 'Science', 'experience' => 3],
            ['name' => 'Mrs. Brown', 'subject' => 'History', 'experience' => 10],
        ],
    ];
    return response() -> json ($data);
});
