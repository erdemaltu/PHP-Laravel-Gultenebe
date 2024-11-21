<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Translatable;

class Package extends Model
{
    use Translatable;

    protected $fillable = [
        'name_tr', 'name_en', 'slug', 'description_tr', 'description_en', 'price', 
        'seo_title', 'seo_description', 'seo_keywords_'
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

