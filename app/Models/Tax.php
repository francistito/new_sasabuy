<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{


    public  function scopeIsActive($query)
    {
        return $query->where('is_active', 1);
    }
}
