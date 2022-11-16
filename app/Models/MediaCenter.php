<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaCenter extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function mediaCenterBanner()
    {
        return $this->hasOne(MediaCenterBanner::class,'media_center');
    }

    public function mediaCenterLibrary()
    {
        return $this->hasMany(MediaCenterLibrary::class,'media_center');
    }

    public function mediaCenterVideoLibrary()
    {
        return $this->hasMany(MediaCenterVideoLibrary::class,'media_center');
    }

    public function media()
    {
        return $this->hasMany(Media::class,'media_center');
    }
}
