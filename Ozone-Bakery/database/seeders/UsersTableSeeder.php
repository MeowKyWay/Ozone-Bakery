<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'John Doe',
                'tel' => '1234567890',
                'email' => 'john@example.com',
                'password' => '12345678',
                'is_admin' => 1, // Admin user
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'tel' => '9876543210',
                'email' => 'jane@example.com',
                'password' => '12345678',
                'is_admin' => 0, // Regular user
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        User::insert($data);
    }
}
