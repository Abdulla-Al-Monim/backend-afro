<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutGovernmancePolicie extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function govermentRole()
    {
        return $this->hasMany(GovermentRole::class,'about_governmance_policie_id');
    }
}
