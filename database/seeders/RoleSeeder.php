<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{

    public function run(): void
    {
        Role::updateOrCreate(
            ['name' => 'admin'],
            ['description' => 'Administrator']
        );

        Role::updateOrCreate(
            ['name' => 'owner'],
            ['description' => 'Owner']
        );

        Role::updateOrCreate(
            ['name' => 'customer'],
            ['description' => 'Customer']
        );

        Role::updateOrCreate(
            ['name' => 'technician'],
            ['description' => 'Technician']
        );

        Role::updateOrCreate(
            ['name' => 'keuangan'],
            ['description' => 'Keuangan']
        );

        Role::updateOrCreate(
            ['name' => 'hrd'],
            ['description' => 'Human Resources Department']
        );

        Role::updateOrCreate(
            ['name' => 'super_admin'],
            ['description' => 'Super Administrator']
        );
    }
}
