<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Create admin and regular users
        User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'role' => 1,
            'password' => Hash::make('secret007'),
        ]);
        $user1 = User::create([
            'name' => 'User One',
            'email' => 'user1@mail.com',
            'password' => Hash::make('secret007'),
        ]);
        $user2 = User::create([
            'name' => 'User Two',
            'email' => 'user2@mail.com',
            'password' => Hash::make('secret007'),
        ]);
        $user3 = User::create([
            'name' => 'User Three',
            'email' => 'user3@mail.com',
            'password' => Hash::make('secret007'),
        ]);
        $user4 = User::create([
            'name' => 'User Four',
            'email' => 'user4@mail.com',
            'password' => Hash::make('secret007'),
        ]);

        // Create tasks for User 1
        for ($i = 1; $i <= 5; $i++) {
            Task::create([
                'user_id' => $user1->id,
                'title' => 'Task ' . $i . ' for User 1'
            ]);
        }
        // Create tasks for User 2
        for ($i = 1; $i <= 5; $i++) {
            Task::create([
                'user_id' => $user2->id,
                'title' => 'Task ' . $i . ' for User 2'
            ]);
        }
        // Create tasks for User 3
        for ($i = 1; $i <= 5; $i++) {
            Task::create([
                'user_id' => $user3->id,
                'title' => 'Task ' . $i . ' for User 3'
            ]);
        }

        // Create tasks for User 4
        for ($i = 1; $i <= 5; $i++) {
            Task::create([
                'user_id' => $user4->id,
                'title' => 'Task ' . $i . ' for User 4'
            ]);
        }
    }
}
