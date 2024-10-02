<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setupserial extends Model
{
    use HasFactory;

    protected $fillable = [
        'dr_name',
        'slno',
    ];
}


