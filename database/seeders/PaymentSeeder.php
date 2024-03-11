<?php

namespace Database\Seeders;

use App\Models\Payment;
use App\Models\RepairRecord;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{

    public function run(): void
    {
        $repairRecords = RepairRecord::all();

        $payments = [
            [
                'record_id' => $repairRecords->random()->id,
                'metode_pembayaran' => 'Transfer Bank',
                'jumlah_pembayaran' => 50000,
                'tanggal_pembayaran' => now()->subDays(rand(1, 30)),
                'catatan_pembayaran' => 'Pembayaran sebagian untuk perbaikan',
            ],
            [
                'record_id' => $repairRecords->random()->id,
                'metode_pembayaran' => 'Tunai',
                'jumlah_pembayaran' => 100000,
                'tanggal_pembayaran' => now()->subDays(rand(1, 30)),
                'catatan_pembayaran' => 'Pembayaran penuh untuk perbaikan',
            ],
        ];

        foreach ($payments as $paymentData) {
            Payment::updateOrCreate($paymentData);
        }
    }
}
