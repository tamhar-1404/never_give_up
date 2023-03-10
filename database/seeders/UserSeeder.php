<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
                'username' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make ('admin123'),
                'role' => 'Admin',
                'foto' => 'ppppp.jpg',
                'remember_token' => Str::random (60),
        ]);
    }
}
