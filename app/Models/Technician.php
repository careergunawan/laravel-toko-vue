<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'jabatan', 'kontak'];

    public function repairRecords()
    {
        return $this->hasMany(RepairRecord::class);
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
