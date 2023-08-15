<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        $students = [
            [ 'user_id' => 5 ],
        ];

        foreach ($students as $student) {
            Student::create($student);
        }
    }
}
