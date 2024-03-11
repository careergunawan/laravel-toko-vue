<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul', 'deskripsi','jenis_laporan' ,'tanggal_laporan'
    ];
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
