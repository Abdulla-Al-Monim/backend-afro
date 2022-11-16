<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function aboutApproachBanner()
    {
        return $this->hasOne(AboutApproachBanner::class,'about');
    }

    public function aboutApproachIntegrity()
    {
        return $this->hasOne(AboutApproachIntegrity::class,'about');
    }
    public function aboutApproachExcellence()
    {
        return $this->hasOne(AboutApproachExcellence::class,'about');
    }
    public function aboutApproachPartnership()
    {
        return $this->hasOne(AboutApproachPartnership::class,'about');
    }
    public function aboutBanner()
    {
        return $this->hasOne(AboutBanner::class,'about');
    }
    public function aboutBusinessmodelBanner()
    {
        return $this->hasOne(AboutBusinessmodelBanner::class,'about');
    }
    public function aboutBusinessModelMarketOpportunity()
    {
        return $this->hasMany(AboutBusinessModelMarketOpportunity::class,'about');
    }

    public function aboutBusinessOperation()
    {
        return $this->hasMany(AboutBusinessOperation::class,'about');
    }

    public function aboutBusinessStakeHolder()
    {
        return $this->hasMany(AboutBusinessStakeHolder::class,'about');
    }

    public function aboutBusinessStrategy()
    {
        return $this->hasOne(AboutBusinessStrategy::class,'about');
    }

    public function aboutGovernmanceBanner()
    {
        return $this->hasOne(AboutGovernmanceBanner::class,'about');
    }

    public function aboutGovernmancePolicie()
    {
        return $this->hasMany(AboutGovernmancePolicie::class,'about');
    }

    public function aboutManagementTeam()
    {
        return $this->hasMany(AboutManagementTeam::class,'about');
    }

    public function aboutOverviewAsset()
    {
        return $this->hasOne(AboutOverviewAsset::class,'about');
    }
    public function aboutOverviewCustomer()
    {
        return $this->hasOne(AboutOverviewCustomer::class,'about');
    }
    public function aboutOverviewDo()
    {
        return $this->hasOne(AboutOverviewDo::class,'about');
    }
    public function aboutOverviewPeople()
    {
        return $this->hasOne(AboutOverviewPeople::class,'about');
    }

    public function aboutReport()
    {
        return $this->hasMany(AboutReport::class,'about');
    }

    public function aboutStrategy()
    {
        return $this->hasOne(AboutStrategy::class,'about');
    }

    public function leader()
    {
        return $this->hasMany(Leader::class,'about');
    }
}
