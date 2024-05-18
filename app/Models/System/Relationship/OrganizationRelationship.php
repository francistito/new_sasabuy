<?php
/**
 * Created by PhpStorm.
 * User: hamis
 * Date: 8/5/19
 * Time: 10:43 AM
 */

namespace App\Models\System\Relationship;

use App\Models\System\CodeValue;
use App\Models\System\District;
use App\Models\System\Document;
use App\Models\System\Zone;

trait OrganizationRelationship
{


    public function documents(){
        return $this->morphToMany(Document::class, 'resource', 'document_resource')->withPivot('id','name', 'description', 'ext', 'size', 'mime','isactive');
    }

    public function fontFamily()
    {
        return $this->belongsTo(CodeValue::class, 'font_family', 'name');
    }
}
