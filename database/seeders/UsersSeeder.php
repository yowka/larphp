<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'surname' => 'Adminov',
            'login' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin66'),
            'role_id' => 1,
        ]);

        User::create([
            'name' => 'John',
            'surname' => 'Doe',
            'login' => 'johndoe',
            'email' => 'john@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 2,
        ]);
    }
}
