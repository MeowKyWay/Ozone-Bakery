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
                'name' => "Kan",
                'lastname' => "Sriprapai",
                'tel' => '1112223333',
                'email' => 'gunkspp1511@gmail.com',
                'password' => Hash::make("12345678"),
                'is_admin' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Duj",
                'lastname' => "Dujduj",
                'tel' => '1234567890',
                'email' => 'dujduj@example.com',
                'password' => Hash::make("12345678"),
                'is_admin' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        User::insert($data);

    }
}
