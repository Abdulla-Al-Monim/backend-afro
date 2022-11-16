<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSlider extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function serviceCountry()
    {
        return $this->hasMany(ServiceCountry::class,'service_slider_id');
    }
}
