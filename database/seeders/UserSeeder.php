<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            [ 'role_id' => '1', 'firstname' => 'Shawon', 'lastname' => 'Khan', 'username' => 'shawonk007', 'email' => 'shawonk007@gmail.com', 'phone' => '+88 (016) 88-947741', 'password' => Hash::make('Dhaka1216'), 'status' => 1 ],
            [ 'role_id' => '2', 'firstname' => 'Sumona', 'lastname' => 'Akter', 'username' => 'sapria27', 'email' => 'sapriya27@gmail.com', 'phone' => '+88 (012) 34-567890', 'password' => Hash::make('Dhaka1216'), 'status' => 1 ],
            [ 'role_id' => '7', 'firstname' => 'Muntaha', 'lastname' => 'Annie', 'username' => 'muntaha.annie', 'email' => 'muntaha.annie@gmail.com', 'phone' => '+88 (013) 34-567890', 'password' => Hash::make('Dhaka1216'), 'status' => 1 ],
            [ 'role_id' => '2', 'firstname' => 'John', 'lastname' => 'Doe', 'username' => 'johndoe', 'email' => 'john@email.com', 'phone' => '+88 (014) 34-567890', 'password' => Hash::make('secret'), 'status' => 1 ],
            [ 'role_id' => '9', 'firstname' => 'Jane', 'lastname' => 'Smith', 'username' => 'janesmith', 'email' => 'janesmith@email.com', 'phone' => '+88 (015) 24-567890', 'password' => Hash::make('secret'), 'status' => 1 ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
