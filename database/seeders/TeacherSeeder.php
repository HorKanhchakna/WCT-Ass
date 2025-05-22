<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    public function run()
    {
        $this->call(TeacherSeeder::class);
        DB::table('teachers')->insert([
            ['name' => 'Mr. Smith', 'subject' => 'Mathematics'],
            ['name' => 'Ms. Johnson', 'subject' => 'Science'],
            ['name' => 'Mrs. Brown', 'subject' => 'History'],
        ]);
    }
}