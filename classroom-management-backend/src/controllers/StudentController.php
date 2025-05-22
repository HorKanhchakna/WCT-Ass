<?php

namespace App\Controllers;

class StudentController
{
    private $students = [];

    public function getAllStudents()
    {
        return response()->json(['students' => $this->students]);
    }

    public function createStudent($data)
    {
        $this->students[] = $data;
        return response()->json(['message' => 'Student created successfully', 'data' => $data]);
    }

    public function deleteStudent($id)
    {
        if (isset($this->students[$id])) {
            unset($this->students[$id]);
            return response()->json(['message' => 'Student deleted successfully']);
        }
        return response()->json(['message' => 'Student not found'], 404);
    }

    public function updateStudent($id, $data)
    {
        if (isset($this->students[$id])) {
            $this->students[$id] = array_merge($this->students[$id], $data);
            return response()->json(['message' => 'Student updated successfully', 'data' => $this->students[$id]]);
        }
        return response()->json(['message' => 'Student not found'], 404);
    }
}