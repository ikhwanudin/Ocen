<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function scopeRootPage($query)
    {
        return $query->where('slug', '/')->first();
    }
}
