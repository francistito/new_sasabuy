<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariationLocalization extends Model
{


    protected $fillable = [
        'name',
        'variation_id',
        'lang_key',
    ];
}
