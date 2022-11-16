<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SustainabilityMaterial extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function keyMaterial()
    {
        return $this->hasMany(KeyMaterial::class,'sustainability_material_id');
    }
}
