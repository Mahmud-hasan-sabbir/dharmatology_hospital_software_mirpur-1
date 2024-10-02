<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctorsetup extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'department',
        'degree',
        'phone',
        'room_no',
        'visiting_hour_start',
        'visiting_hour_end',
        'fee',
        'status',
        'remarks',
        'user_id',
    ];
}


