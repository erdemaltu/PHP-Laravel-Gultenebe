<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Translatable;

class Slider extends Model
{
    use Translatable;

    protected $fillable = [
        'name_tr', 'name_en', 'image', 'description_tr', 'description_en', 'active', 'order'
    ];

    public function getNameAttribute()
    {
        return $this->translateAttribute('name');
    }

    public function getDescriptionAttribute()
    {
        return $this->translateAttribute('description');
    }
}

