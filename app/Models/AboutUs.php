<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Translatable;

class AboutUs extends Model
{
    use Translatable;

    protected $fillable = [
        'slug', 'content_tr', 'content_en', 'seo_title',
        'seo_description', 'seo_keywords'
    ];

    // Dil desteğiyle içerik çağırma
    public function getContentAttribute()
    {
        return $this->translateAttribute('content');
    }
}

