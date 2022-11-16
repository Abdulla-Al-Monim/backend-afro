<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    public function themeContact()
    {
        return $this->hasOne(ThemeContact::class,'theme');
    }

    public function themeFooter()
    {
        return $this->hasOne(ThemeFooter::class,'theme');
    }

    public function themeLogo()
    {
        return $this->hasOne(ThemeLogo::class,'theme');
    }

    public function themeSocialmedia()
    {
        return $this->hasOne(ThemeSocialmedia::class,'theme');
    }
}
