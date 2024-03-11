<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    use HasFactory;
    protected $table = 'spareparts';
    protected $fillable = [
        'nama_spare_part',
        'vendor',
        'nomor_part',
        'harga_beli',
        'harga_jual',
        'diskon',
        'kupon',
        'stok'
    ];
}
