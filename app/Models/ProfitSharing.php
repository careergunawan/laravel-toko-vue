<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfitSharing extends Model
{
    use HasFactory;
    protected $fillable = ['technician_id', 'owner_id', 'percentage'];

    // Relasi dengan model Technician
    public function technician()
    {
        return $this->belongsTo(Technician::class);
    }

    // Relasi dengan model Owner
    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
