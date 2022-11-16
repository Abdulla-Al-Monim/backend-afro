<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutReport extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function presentationReport()
    {
        return $this->hasMany(PresentationReport::class,'about_report_id');
    }
}
