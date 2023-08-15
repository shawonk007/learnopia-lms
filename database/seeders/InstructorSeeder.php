<?php

namespace Database\Seeders;

use App\Models\Instructor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstructorSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        $instructors = [
            [ 'user_id' => 3, 'commission' => '30.00', 'featured' => TRUE ],
        ];

        foreach ($instructors as $instructor) {
            Instructor::create($instructor);
        }
    }
}
