<?php

namespace Database\Seeders;

use App\Models\Owner;
use App\Models\ProfitSharing;
use App\Models\Technician;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfitSharingSeeder extends Seeder
{

    public function run(): void
    {
        $technicians = Technician::all();
        $owners = Owner::all();

        $profitSharing = [
            [
                'technician_id' => $technicians->random()->id,
                'owner_id' => $owners->random()->id,
                'percentage' => 20, // Misalnya, teknisi mendapatkan 20% dari keuntungan bersih
            ],
            [
                'technician_id' => $technicians->random()->id,
                'owner_id' => $owners->random()->id,
                'percentage' => 30, // Misalnya, teknisi mendapatkan 30% dari keuntungan bersih
            ],
        ];

        foreach ($profitSharing as $sharingData) {
            ProfitSharing::updateOrCreate($sharingData);
        }
    }
}
