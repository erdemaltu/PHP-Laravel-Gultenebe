<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Translatable;

class SubService extends Model
{
    use Translatable;

    protected $fillable = [
        'service_id', 'name_tr', 'name_en', 'slug', 'definition_tr', 'definition_en', 
        'description_tr', 'description_en', 'image', 'seo_title', 'seo_description',  
        'seo_keywords', 'active', 'order'
    ];

    public function getNameAttribute()
    {
        return $this->translateAttribute('name');
    }

    public function getDefinitionAttribute()
    {
        return $this->translateAttribute('definition');
    }

    public function getDescriptionAttribute()
    {
        return $this->translateAttribute('description');
    }
    
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

}
