<?php

namespace Database\Seeders;

use App\Models\Sparepart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SparepartSeeder extends Seeder
{

    public function run(): void
    {
        $spareparts = [
            [
                'nama_spare_part' => 'Nama Spare Part 1',
                'vendor' => 'Discount NB',
                'nomor_part' => 'SP001',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
                'diskon' => 0,
                'kupon' => 'KUPON123',
                'stok' => 50,
            ],
            [
                'nama_spare_part' => 'Nama Spare Part 2',
                'vendor' => 'Discount NB',
                'nomor_part' => 'SP002',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
                'diskon' => 5,
                'kupon' => 'KUPON123',
                'stok' => 30,
            ],
        ];

        foreach ($spareparts as $sparepartData) {
            Sparepart::updateOrCreate($sparepartData);
        }
    }
}
