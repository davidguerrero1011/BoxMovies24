<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleByUsers extends Model
{
    use HasFactory;

    protected $table = "role_by_users";
}
