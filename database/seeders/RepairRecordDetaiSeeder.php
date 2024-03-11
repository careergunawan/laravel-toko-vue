<?php

namespace Database\Seeders;

use App\Models\RepairRecord;
use App\Models\RepairRecordDetail;
use App\Models\Technician;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RepairRecordDetaiSeeder extends Seeder
{

    public function run(): void
    {
        // Ambil beberapa data repair record yang sudah ada
        $repairRecords = RepairRecord::all();

        foreach ($repairRecords as $record) {
            // Cek apakah detail repair record sudah ada
            $existingDetail = RepairRecordDetail::where('repair_record_id', $record->id)->first();

            // Jika belum ada, tambahkan detail repair record
            if (!$existingDetail) {
                $technician = Technician::inRandomOrder()->first();
                RepairRecordDetail::create([
                    'repair_record_id' => $record->id,
                    'issue_description' => 'Deskripsi masalah untuk Repair Record ' . $record->id,
                    'repair_steps' => 'Langkah perbaikan untuk Repair Record ' . $record->id,
                    'cost' => 100000,
                    'technician_id' => $technician->id,
                    'jenis_kerusakan_id' => 'Hardware' . $record->jenis_kerusakan_id,
                ]);
            }
        }
    }
}
