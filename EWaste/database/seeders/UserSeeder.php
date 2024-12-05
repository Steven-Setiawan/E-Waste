<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * $table->id();
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'admin1',
                'email' => 'admin1@gmail.com',
                'password' => 'PSadmin1',
                'role' => 'admin',
                'photo' => 'img/user/admin1.jpeg',
                'gender' => 'male',
                'DOB' => '2002-10-16',
                'cities_id' => 1,
                'address' => 'Jl. Kebayoran Lama No.52'
            ],
            [
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'password' => 'PSuser1',
                'role' => 'user',
                'photo' => 'img/user/user1.jpeg',
                'gender' => 'male',
                'DOB' => '2003-11-08',
                'cities_id' => 1,
                'address' => 'Jl. Utama Raya No.9'
            ]
        ];

        DB::table('users')->insert($user);
    }
}
