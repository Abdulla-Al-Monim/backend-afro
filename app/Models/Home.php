<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    public function indexAcademy()
    {
        return $this->hasOne(IndexAcademy::class,'home');
    }

    public function indexApproach()
    {
        return $this->hasOne(IndexApproach::class,'home');
    }

    public function indexHeaderButton()
    {
        return $this->hasOne(IndexHeaderButton::class,'home');
    }

    public function indexHeader()
    {
        return $this->hasOne(IndexHeader::class,'home');
    }

    public function indexMagazine()
    {
        return $this->hasOne(IndexMagazine::class,'home');
    }

    public function indexPartner()
    {
        return $this->hasOne(IndexPartner::class,'home');
    }

    public function IndexPartnerSliders()
    {
        return $this->hasMany(IndexPartnerSlider::class,'home');
    }

    public function indexReview()
    {
        return $this->hasOne(IndexReview::class,'home');
    }

    public function indexReviewSliders()
    {
        return $this->hasMany(IndexReviewSlider::class,'home');
    }

    public function indexService()
    {
        return $this->hasOne(IndexService::class,'home');
    }

    public function serviceSlider()
    {
        return $this->hasMany(ServiceSlider::class,'home');
    }

    public function indexSolution()
    {
        return $this->hasOne(IndexSolution::class,'home');
    }

    public function indexAward()
    {
        return $this->hasMany(IndexAward::class,'home');
    }


    public function magazine()
    {
        return $this->hasMany(Magazine::class,'home');
    }




}
