<?php

namespace Database\Seeders;

use App\Models\Report;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data laporan yang akan disimpan
        $reports = [
            [
                'judul' => 'Laporan Pertama',
                'deskripsi' => 'Ini adalah laporan pertama.',
                'jenis_laporan' => 'Harian',
                'tanggal_laporan' => now()->subDays(5),
            ],
            [
                'judul' => 'Laporan Kedua',
                'deskripsi' => 'Ini adalah laporan kedua.',
                'jenis_laporan' => 'Mingguan',
                'tanggal_laporan' => now()->subDays(3),
            ],
        ];

        foreach ($reports as $reportData) {
            Report::updateOrCreate($reportData);
        }
    }
}
