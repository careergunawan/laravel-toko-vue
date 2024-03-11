<?php

namespace Database\Seeders;

use App\Models\Device;
use App\Models\RepairRecord;
use App\Models\Technician;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RepairRecordSeeder extends Seeder
{

    public function run(): void
    {
        // Ambil beberapa device dan technician yang akan di-assign pada repair record
        $devices = Device::all();
        $technicians = Technician::all();

        // Data repair record yang akan disimpan
        $repairRecords = [
            [
                'device_id' => $devices->random()->id,
                'technician_id' => $technicians->random()->id,
                'tanggal_perbaikan' => now()->subDays(rand(1, 30)),
                'deskripsi_masalah' => 'Deskripsi masalah perbaikan 1',
                'langkah_perbaikan' => 'Langkah perbaikan 1',
                'biaya' => 100000,
                'status_perbaikan' => 'Selesai',
                'nomor_kode_service' => 'KODE123',
                'jenis_kerusakan' => 'Hardware',
            ],
            [
                'device_id' => $devices->random()->id,
                'technician_id' => $technicians->random()->id,
                'tanggal_perbaikan' => now()->subDays(rand(1, 30)),
                'deskripsi_masalah' => 'Deskripsi masalah perbaikan 2',
                'langkah_perbaikan' => 'Langkah perbaikan 2',
                'biaya' => 150000,
                'status_perbaikan' => 'Selesai',
                'nomor_kode_service' => 'KODE456',
                'jenis_kerusakan' => 'Software',
            ],
        ];

        foreach ($repairRecords as $repairRecordData) {
            RepairRecord::updateOrCreate($repairRecordData);
        }
    }
}
