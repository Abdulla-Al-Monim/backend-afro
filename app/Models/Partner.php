<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    public function partnerBanner()
    {
        return $this->hasOne(PartnerBanner::class,'partner');
    }

    public function partnerCommunity()
    {
        return $this->hasOne(PartnerCommunity::class,'partner');
    }

    public function partnerCustomer()
    {
        return $this->hasOne(PartnerCustomer::class,'partner');
    }

    public function partnerEnvironment()
    {
        return $this->hasOne(PartnerEnvironment::class,'partner');
    }

    public function partnerInvestor()
    {
        return $this->hasOne(PartnerInvestor::class,'partner');
    }


    public function partnerWorkforce()
    {
        return $this->hasOne(PartnerWorkforce::class,'partner');
    }
}
