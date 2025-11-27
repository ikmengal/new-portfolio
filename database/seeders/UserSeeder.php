<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $defaultUsers = [
            [
                'name' => "John",
                'email' => "admin@gmail.com",
                'password' => Hash::make("admin@123"),
            ],
            [
                'name' => "Imran Ali",
                'email' => "imran@gmail.com",
                'password' => Hash::make("admin@123"),
            ],
        ];

        foreach ($defaultUsers as $key => $user) {
            $model = User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
            ]);
        }
    }
}
