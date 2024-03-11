<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairRecordDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'repair_record_id',
        'issue_description',
        'repair_steps',
        'cost',
        'technician_id',
        'jenis_kerusakan_id',
    ];

    public function repairRecord()
    {
        return $this->belongsTo(RepairRecord::class);
    }
    public function technician()
    {
        return $this->belongsTo(Technician::class);
    }
}
