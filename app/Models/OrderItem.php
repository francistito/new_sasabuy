<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{


    public function product_variation()
    {
        return $this->belongsTo(ProductVariation::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
