<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            [
                'nama' => 'Nama Customer 1',
                'alamat' => 'Alamat Customer 1',
                'nomor_telepon' => '123456789',
                'email' => 'customer1@example.com',
            ],
            [
                'nama' => 'Nama Customer 2',
                'alamat' => 'Alamat Customer 2',
                'nomor_telepon' => '987654321',
                'email' => 'customer2@example.com',
            ],
            // Tambahkan data customer lainnya sesuai kebutuhan
        ];

        foreach ($customers as $customerData) {
            // Gunakan metode updateOrCreate untuk memperbarui atau membuat data baru
            Customer::updateOrCreate(
                ['email' => $customerData['email']],
                $customerData
            );
        }
    }
}
