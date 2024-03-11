<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'alamat', 'nomor_telepon', 'email'];

    public function devices()
    {
        return $this->hasMany(Device::class);
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
