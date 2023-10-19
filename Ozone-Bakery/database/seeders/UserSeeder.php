<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        if (User::count() > 0) {
            return;
        }

        $user = new User();
        $user->firstname = 'หมิวหมิว';
        $user->lastname = 'หมิวหมิว';
        $user->email = 'mute@example.com';
        $user->password = Hash::make("mute");
        $user->role = User::ROLE_MEMBER;
        $user->save();


    }
}
