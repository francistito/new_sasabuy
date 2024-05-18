<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageLocalization extends Model
{


    protected $fillable = [
        'name',
        'page_id',
        'lang_key',
    ];
}
