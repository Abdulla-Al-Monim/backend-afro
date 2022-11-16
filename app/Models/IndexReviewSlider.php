<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndexReviewSlider extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function project()
    {
        return $this->hasMany(Project::class,'index_review_slider_id');
    }
}
