<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
    protected $fillable = [
        'service_id',
        'name',
        'slug',
        'definition',
        'description',
        'seo_title',
        'seo_description',
        'seo_keywords',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
