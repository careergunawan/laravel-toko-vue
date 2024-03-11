<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Device;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeviceSeeder extends Seeder
{

    public function run(): void
    {
        $customers = Customer::all();

        $devices = [
            [
                'customer_id' => $customers->random()->id,
                'merek' => 'Merek 1',
                'model' => 'Model 1',
                'nomor_seri' => '123456789',
                'spesifikasi' => 'Spesifikasi perangkat 1',
                'status_garansi' => 'Aktif',
            ],
            [
                'customer_id' => $customers->random()->id,
                'merek' => 'Merek 2',
                'model' => 'Model 2',
                'nomor_seri' => '987654321',
                'spesifikasi' => 'Spesifikasi perangkat 2',
                'status_garansi' => 'Tidak Aktif',
            ],
        ];

        foreach ($devices as $deviceData) {
            Device::updateOrCreate($deviceData);
        }
    }
}
