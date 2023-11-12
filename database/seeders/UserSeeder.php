<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::created([
            'name' => 'Steve Rogers',
            'email' => 'avenger@gmail.com',
            'password' => Hash::make('123456')
        ]);
    }
}
