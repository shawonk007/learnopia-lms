<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        //
        $roles = [
            [ 'title' => 'Super Admin', 'slug' => 'super-admin', 'status' => 1 ],
            [ 'title' => 'Administrator', 'slug' => 'administrator', 'status' => 1 ],
            [ 'title' => 'Moderator', 'slug' => 'moderator', 'status' => 1 ],
            [ 'title' => 'Editor', 'slug' => 'Editor', 'status' => 1 ],
            [ 'title' => 'Contributor', 'slug' => 'contributor', 'status' => 1 ],
            [ 'title' => 'Author', 'slug' => 'author', 'status' => 1 ],
            [ 'title' => 'Instructor', 'slug' => 'instructor', 'status' => 1 ],
            [ 'title' => 'Support Staff', 'slug' => 'support-staff', 'status' => 1 ],
            [ 'title' => 'Student', 'slug' => 'student', 'status' => 1 ],
            [ 'title' => 'Subscriber', 'slug' => 'subscriber', 'status' => 1 ],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
