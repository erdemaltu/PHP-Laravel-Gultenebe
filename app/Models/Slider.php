<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Translatable;

class Slider extends Model
{
    use Translatable;

    protected $fillable = [
        'name', 'image', 'description_tr', 'description_en', 'active', 'order'
    ];

    public function getDescriptionAttribute()
    {
        return $this->translateAttribute('description');
    }
}

