<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles; // KEY :: MULTIPERMISSION

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles; // KEY :: MULTIPERMISSION

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',

        'unique_patient_id',
        'dob',
        'age',
        'gender',
        'religion',
        'blood_group',
        'height_feet',
        'height_inches',
        'weight_kg',
        'weight_pounds',
        'bmi',
        'emergency_contact',
        'marital_status',
        'address',
        'nationality',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
