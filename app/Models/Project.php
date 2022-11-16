<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function company()
    {

        return $this->belongsTo('App\Models\Company','company_id');
    }

    public function region()
    {

        return $this->belongsTo('App\Models\Region','region_id');
    }

    public function contactCountry()
    {
        return $this->belongsTo('App\Models\ContactCountry','contact_country_id');
    }

    public function indexReviewSlider()
    {
        return $this->belongsTo('App\Models\IndexReviewSlider','index_review_slider_id');
    }
}
