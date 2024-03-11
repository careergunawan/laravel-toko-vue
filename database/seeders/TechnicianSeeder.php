<?php

namespace Database\Seeders;

use App\Models\Technician;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnicianSeeder extends Seeder
{

    public function run(): void
    {
        // Data teknisi yang akan disimpan
        $technicians = [
            [
                'nama' => 'Nama Teknisi 1',
                'jabatan' => 'Jabatan Teknisi 1',
                'kontak' => '08123456789',
            ],
            [
                'nama' => 'Nama Teknisi 2',
                'jabatan' => 'Jabatan Teknisi 2',
                'kontak' => '08987654321',
            ],
        ];

        foreach ($technicians as $technicianData) {
            // Gunakan metode create untuk membuat data baru
            Technician::updateOrCreate($technicianData);
        }
    }
}
