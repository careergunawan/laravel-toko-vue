<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'record_id',
        'metode_pembayaran',
        'jumlah_pembayaran',
        'tanggal_pembayaran',
        'catatan_pembayaran'
    ];

    public function repairRecord()
    {
        return $this->belongsTo(RepairRecord::class, 'record_id');
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
