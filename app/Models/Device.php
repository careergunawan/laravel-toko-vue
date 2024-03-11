<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'merek', 'model', 'nomor_seri', 'spesifikasi', 'status_garansi'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function repairRecords()
    {
        return $this->hasMany(RepairRecord::class);
    }
    public function repairRecordDetail()
    {
        return $this->hasMany(RepairRecordDetail::class);
    }
}
