<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{

    public function run(): void
    {
        // Mendapatkan role berdasarkan namanya
        $adminRole = Role::where('name', 'admin')->first();
        $ownerRole = Role::where('name', 'owner')->first();
        $customerRole = Role::where('name', 'customer')->first();
        $technicianRole = Role::where('name', 'technician')->first();
        $keuanganRole = Role::where('name', 'keuangan')->first();
        $hrdRole = Role::where('name', 'hrd')->first();
        $superAdminRole = Role::where('name', 'super_admin')->first();


        // Mendapatkan pengguna berdasarkan email atau id
        $adminUser = User::where('email', 'admin@example.com')->first();
        $ownerUser = User::where('email', 'owner@example.com')->first();
        $customer = User::where('email', 'user@example.com')->first();
        $technician = User::where('email', 'technician@example.com')->first();
        $keuangan = User::where('email', 'keuangan@example.com')->first();
        $hrd = User::where('email', 'hrd@example.com')->first();
        $superAdmin = User::where('email', 'superadmin@example.com')->first();


        // Memastikan pengguna dan role ditemukan sebelum menambahkan relasi
        if ($adminRole && $adminUser) {
            $adminUser->roles()->attach($adminRole);
        }
        if ($ownerRole && $ownerUser) {
            $ownerUser->roles()->attach($ownerRole);
        }
        if ($customerRole && $customer) {
            $customer->roles()->attach($customerRole);
        }
        if ($technicianRole && $technician) {
            $technician->roles()->attach($technicianRole);
        }
        if ($keuanganRole && $keuangan) {
            $keuangan->roles()->attach($keuanganRole);
        }
        if ($hrdRole && $hrd) {
            $hrd->roles()->attach($hrdRole);
        }
        if ($superAdminRole && $superAdmin) {
            $superAdmin->roles()->attach($superAdminRole);
        }

        $now = Carbon::now();
        $adminUser->roles()->syncWithoutDetaching([
            $adminRole->id => ['created_at' => $now, 'updated_at' => $now]
        ]);
        $ownerUser->roles()->syncWithoutDetaching([
            $ownerRole->id => ['created_at' => $now, 'updated_at' => $now]
        ]);
        $customer->roles()->syncWithoutDetaching([
            $customerRole->id => ['created_at' => $now, 'updated_at' => $now]
        ]);
        $technician->roles()->syncWithoutDetaching(
            [$technicianRole->id => ['created_at' => $now, 'updated_at' => $now]]
        );
        $keuangan->roles()->syncWithoutDetaching([
            $keuanganRole->id => ['created_at' => $now, 'updated_at' => $now]
        ]);
        $hrd->roles()->syncWithoutDetaching([
            $hrdRole->id => ['created_at' => $now, 'updated_at' => $now]
        ]);
        $superAdmin->roles()->syncWithoutDetaching([
            $superAdminRole->id => ['created_at' => $now, 'updated_at' => $now]
        ]);
    }
}
