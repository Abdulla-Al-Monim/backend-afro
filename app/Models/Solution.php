<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function solutionBanner()
    {
        return $this->hasOne(SolutionBanner::class,'solution');
    }

    public function solutionBuild()
    {
        return $this->hasOne(SolutionBuild::class,'solution');
    }
    public function solutionProduct()
    {
        return $this->hasOne(SolutionProduct::class,'solution');
    }

    public function solutionProductSlider()
    {
        return $this->hasMany(SolutionProductSlider::class,'solution');
    }

    public function solutionColocation()
    {
        return $this->hasOne(SolutionColocation::class,'solution');
    }

    public function solutionInBuildingSolution()
    {
        return $this->hasOne(SolutionInBuildingSolution::class,'solution');
    }

    public function solutionSale()
    {
        return $this->hasOne(SolutionSale::class,'solution');
    }

    public function solutionService()
    {
        return $this->hasOne(SolutionService::class,'solution');
    }
}
