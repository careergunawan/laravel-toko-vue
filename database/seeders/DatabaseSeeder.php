<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {

        $this->call(
            [
                RoleSeeder::class,
                UserSeeder::class,
                RoleUserSeeder::class,
                CustomerSeeder::class,
                OwnerSeeder::class,
                DeviceSeeder::class,
                TechnicianSeeder::class,
                SparepartSeeder::class,
                RepairRecordSeeder::class,
                RepairRecordDetaiSeeder::class,
                PaymentSeeder::class,
                ProfitSharingSeeder::class,
                ReportSeeder::class,
            ]
        );
    }
}
