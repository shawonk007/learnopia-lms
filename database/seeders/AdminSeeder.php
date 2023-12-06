<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        $admins = [
            [ 'role_id' => 1, 'firstname' => 'Nasiruddin', 'lastname' => 'Khan', 'username' => 'nasiruddin.khan', 'email' => 'nasiruddin.khan@gmail.com', 'email_verified_at' => date('Y-m-d H:i:s'), 'phone' => '+88 (018) 75-733481', 'password' => Hash::make('Dhaka1216'), 'status' => 1 ],
            [ 'role_id' => 1, 'firstname' => 'Sumona', 'lastname' => 'Akter', 'username' => 'sumona.akter', 'email' => 'sumona.akter@gmail.com', 'email_verified_at' => date('Y-m-d H:i:s'), 'phone' => '+88 (019) 96-021439', 'password' => Hash::make('Dhaka1216'), 'status' => 1 ],
            [ 'role_id' => 1, 'firstname' => 'Muntaha', 'lastname' => 'Annie', 'username' => 'muntaha.annie', 'email' => 'muntaha.annie@gmail.com', 'email_verified_at' => date('Y-m-d H:i:s'), 'phone' => '+88 (016) 88-947741', 'password' => Hash::make('Dhaka1216'), 'status' => 1 ],
            // [ 'role_id' => 1, 'firstname' => '', 'lastname' => '', 'username' => '', 'email' => '', 'email_verified_at' => date('Y-m-d H:i:s'), 'phone' => '', 'password' => Hash::make('Dhaka1216'), 'status' => 1 ],
        ];

        foreach ( $admins as $admin ) {
            Admin::create($admin);
        };
    }
}
