<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logistic extends Model
{


    public function cities()
    {
        return $this->hasMany(LogisticZoneCity::class);
    }
}
