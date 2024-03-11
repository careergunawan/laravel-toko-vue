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
        // Admin
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]
        );

        // Owner
        User::updateOrCreate(
            ['email' => 'owner@example.com'],
            [
                'name' => 'Owner',
                'password' => Hash::make('password'),
                'role' => 'owner',
            ]
        );

        // User Biasa customer
        User::updateOrCreate(
            ['email' => 'user@example.com'],
            [
                'name' => 'User Biasa',
                'password' => Hash::make('password'),
                'role' => 'customer',
            ]
        );

        // Technician
        User::updateOrCreate(
            ['email' => 'technician@example.com'],
            [
                'name' => 'Technician',
                'password' => Hash::make('password'),
                'role' => 'technician',
            ]
        );

        // Keuangan
        User::updateOrCreate(
            ['email' => 'keuangan@example.com'],
            [
                'name' => 'Keuangan',
                'password' => Hash::make('password'),
                'role' => 'keuangan',
            ]
        );

        // HRD
        User::updateOrCreate(
            ['email' => 'hrd@example.com'],
            [
                'name' => 'HRD',
                'password' => Hash::make('password'),
                'role' => 'hrd',
            ]
        );

        // Super Admin
        User::updateOrCreate(
            ['email' => 'superadmin@example.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password'),
                'role' => 'super_admin',
            ]
        );
    }
}
