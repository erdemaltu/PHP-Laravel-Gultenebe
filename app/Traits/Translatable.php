<?php

namespace App\Traits;

trait Translatable
{
    public function translateAttribute($attribute)
    {
        $locale = app()->getLocale();
        $localizedAttribute = $attribute . '_' . $locale;

        return $this->$localizedAttribute ?? $this->{$attribute . '_tr'}; 
    }
}
