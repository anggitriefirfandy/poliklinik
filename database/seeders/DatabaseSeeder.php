<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'uid' => Str::uuid(),
            'email' => 'admin@gmail.com',
            'role_id' => 0,
            'password' => Hash::make('admin'),
        ]);
    }
}
