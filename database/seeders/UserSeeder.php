<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // Import the User model
use Illuminate\Support\Facades\Hash; // Import Hash facade

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create an array of user data
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'), // Hash the password
            ],
            [
                'name' => 'Regular User 1',
                'email' => 'user1@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Regular User 2',
                'email' => 'user2@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Regular User 3',
                'email' => 'user3@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Regular User 4',
                'email' => 'user4@example.com',
                'password' => Hash::make('password123'),
            ],
        ];

        // Loop through each user and create them in the database
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
