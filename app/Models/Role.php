<?php

namespace App\Models;

use App\Models\Auth\RoleAccess;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Access\Relationship\RoleRelationship;
use App\Models\Access\Attribute\RoleAttribute;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Role extends Model
{


    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    /**
     * @var array
     */
    protected $auditableEvents = [
        'deleted',
        'updated',
        'restored',
    ];

}
