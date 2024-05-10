<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make(12345678),
            'specialization' => 'system admin',
            'role' => 'admin'
        ]);
        User::create([
            'first_name' => 'tuka',
            'last_name' => 'heba',
            'email' => 'tuka@gmail.com',
            'password' => Hash::make(12345678),
            'specialization' => 'system admin',
            'role' => 'admin'
        ]);
        User::create([
            'first_name' => 'sara',
            'last_name' => 'heba',
            'email' => 'sara@gmail.com',
            'password' => Hash::make(12345678),
            'specialization' => 'student',
            'role' => 'member'
        ]);

        User::create([
            'first_name' => 'farah',
            'last_name' => 'heba',
            'email' => 'farah@gmail.com',
            'password' => Hash::make(12345678),
            'specialization' => 'teacher',
            'role' => 'member'
        ]);
        User::create([
            'first_name' => 'wafaa',
            'last_name' => 'heba',
            'email' => 'wafaa@gmail.com',
            'password' => Hash::make(12345678),
            'specialization' => 'doctor',
            'role' => 'member'
        ]);
        User::create([
            'first_name' => 'sally',
            'last_name' => 'heba',
            'email' => 'sally@gmail.com',
            'password' => Hash::make(12345678),
            'specialization' => '',
            'role' => 'visitor'
        ]);
        User::create([
            'first_name' => 'ahmad',
            'last_name' => 'heba',
            'email' => 'ahmad@gmail.com',
            'password' => Hash::make(12345678),
            'specialization' => 'scolar',
            'role' => 'visitor'
        ]);
    }
}
