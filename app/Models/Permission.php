<?php

namespace App\Models\Access;

use Illuminate\Database\Eloquent\Model;
use App\Models\Access\Relationship\PermissionRelationship;
use App\Models\Access\Attribute\PermissionAttribute;

/**
 * Class Permission
 * @package App\Models\Access
 */
class Permission extends Model
{
    use PermissionAttribute, PermissionRelationship;



}
