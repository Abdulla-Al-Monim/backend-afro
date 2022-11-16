<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhereWeWork extends Model
{
    use HasFactory;
    public function whereWorkBanner()
    {
        return $this->hasOne(WhereWorkBanner::class,'where_we_work');
    }

    public function whereWorkKps()
    {
        return $this->hasMany(WhereWorkKps::class,'where_we_work');
    }


    public function whereWorkOverview()
    {
        return $this->hasOne(WhereWorkOverview::class,'where_we_work');
    }

    public function whereWorkVideo()
    {
        return $this->hasOne(WhereWorkVideo::class,'where_we_work');
    }
}
