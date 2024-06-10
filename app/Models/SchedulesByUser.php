<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchedulesByUser extends Model
{
    use HasFactory;
    protected $table = 'schedules_by_users';
}
