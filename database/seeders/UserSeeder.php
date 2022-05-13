<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'isAuthenticated' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'Admin1',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'isAuthenticated' => 0
        ]);
    }
}
