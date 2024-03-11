<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairRecord extends Model
{
    use HasFactory;
    protected $fillable = [
        'device_id',
        'technician_id',
        'tanggal_perbaikan',
        'deskripsi_masalah',
        'langkah_perbaikan',
        'biaya',
        'status_perbaikan',
        'nomor_kode_service',
        'jenis_kerusakan'
    ];

    public function device()
    {
        return $this->belongsTo(Device::class);
    }

    public function technician()
    {
        return $this->belongsTo(Technician::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
    public function repairRecordDetail()
    {
        return $this->hasMany(RepairRecordDetail::class);
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
