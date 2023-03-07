<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'username' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make ('admin123'),
                'role' => 'Admin',
                'foto' => 'ppppp.jpg',
                'remember_token' => Str::random (60),
            ],
        ];
        User::insert($user);
    }
}
