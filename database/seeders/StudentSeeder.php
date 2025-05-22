<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    public function run()
    {
        DB::table('students')->insert([
            ['name' => 'John Doe', 'age' => 20],
            ['name' => 'Jane Smith', 'age' => 22],
            ['name' => 'Sam Brown', 'age' => 19],
        ]);
    }
}
