<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'             =>'Admin',
            'email'            =>'admin@gmail.com',
            'email_verified_at'=>now(),
            'password'         =>Hash::make('asdfg123'),
            'remember_token'   =>Str::random(10),
            'is_admin'         => 1
        ]);
    }
}
