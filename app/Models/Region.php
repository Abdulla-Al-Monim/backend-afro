<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function company()
    {

        return $this->belongsTo('App\Models\Company','company_id');
    }


    public function project()
    {
        return $this->hasMany(Project::class,'region_id');
    }

}
