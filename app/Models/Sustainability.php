<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sustainability extends Model
{
    use HasFactory;
    public function sustainabilityBanner()
    {
        return $this->hasOne(SustainabilityBanner::class,'sustainability');
    }

    public function sustainabilityDriving()
    {
        return $this->hasOne(SustainabilityDriving::class,'sustainability');
    }

    public function sustainabilityGovernance()
    {
        return $this->hasOne(SustainabilityGovernance::class,'sustainability');
    }
    public function sustainabilityImage()
    {
        return $this->hasOne(SustainabilityImage::class,'sustainability');
    }

    public function sustainabilityMaterial()
    {
        return $this->hasMany(SustainabilityMaterial::class,'sustainability');
    }

    public function sustainabilityProposition()
    {
        return $this->hasOne(SustainabilityProposition::class,'sustainability');
    }

    public function sustainabilitySustainable()
    {
        return $this->hasOne(SustainabilitySustainable::class,'sustainability');
    }
}
