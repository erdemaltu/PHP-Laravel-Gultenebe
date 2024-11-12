<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'definition',
        'description',
        'seo_title',
        'seo_description',
        'seo_keywords',
    ];

    public function subServices()
    {
        return $this->hasMany(SubService::class);
    }
}
