<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        //
        $roles = [
            [ 'title' => 'Super Admin', 'status' => 1 ],
            [ 'title' => 'Administrator', 'status' => 1 ],
            [ 'title' => 'Moderator', 'status' => 1 ],
            [ 'title' => 'Editor', 'status' => 1 ],
            [ 'title' => 'Contributor', 'status' => 1 ],
            [ 'title' => 'Author', 'status' => 1 ],
            [ 'title' => 'Instructor', 'status' => 1 ],
            [ 'title' => 'Support Staff', 'status' => 1 ],
            [ 'title' => 'Student', 'status' => 1 ],
            [ 'title' => 'Subscriber', 'status' => 1 ],
        ];

        foreach ($roles as $role) {
            $role['slug'] = Str::slug($role['title']);
            Role::create($role);
        }
    }
}
