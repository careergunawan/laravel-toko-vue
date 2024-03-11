<?php

namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{

    public function run(): void
    {
        $owners = [
            [
                'nama' => 'Nama Owner 1',
                'email' => 'owner1@example.com',
                'password' => Hash::make('password1'),
            ],
            [
                'nama' => 'Nama Owner 2',
                'email' => 'owner2@example.com',
                'password' => Hash::make('password2'),
            ],
        ];

        foreach ($owners as $ownerData) {
            Owner::updateOrCreate(
                ['email' => $ownerData['email']],
                [
                    'nama' => $ownerData['nama'],
                    'password' => $ownerData['password'],
                ]
            );
        }
    }
}
