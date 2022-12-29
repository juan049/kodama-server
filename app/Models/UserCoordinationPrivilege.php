<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCoordinationPrivilege extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'coordination_id',
        'privilege_id',
    ];
}
