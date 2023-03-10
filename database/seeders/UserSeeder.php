<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hashed_random_password = Hash::make("1234567890");

        DB::table('users')-> delete();
        DB::table('users')-> insert(
            [

            'name' => 'Test',
            'email' => 'user@test.com',
            'password' => $hashed_random_password,

            ]
        );
    }
}
