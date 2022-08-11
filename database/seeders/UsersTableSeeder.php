<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'full_name' => 'kushan madhusanka',
                    'username' => 'admin',
                    "email" => 'admin@gmail.com',
                    'password' => Hash::make('12345678'),
                    'role' => 'admin',
                ],
                [
                    'full_name' => 'kasun perera',
                    'username' => 'vender',
                    "email" => 'vendor@gmail.com',
                    'password' => Hash::make('12345678'),
                    'role' => 'vendor',
                ],
                [
                    'full_name' => 'saman perera',
                    'username' => 'customer',
                    "email" => 'customer@gmail.com',
                    'password' => Hash::make('12345678'),
                    'role' => 'customer',
                ]
            ]
        );
    }
}
