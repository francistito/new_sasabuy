<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{


    public function campaignProducts()
    {
        return $this->hasMany(CampaignProduct::class);
    }
}
