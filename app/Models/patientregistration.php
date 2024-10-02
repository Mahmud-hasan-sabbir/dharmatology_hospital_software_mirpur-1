<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\doctorsetup;

class patientregistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'mrn',
        'reg_no',
        'bill_no',
        'name',
        'fname',
        'shift',
        'dob',
        'age',
        'gender',
        'consultent',
        'occupation',
        'type',
        'address',
        'area',
        'district',
        'telephone',
        'email',
        'room_no',
        'fees',
        'discoutn',
        'feestype',
        'billreprint',
        'preview',
        'printtype',
        'user_id',
    ];

    public function dctname()
    {
        return $this->belongsTo(doctorsetup::class,'consultent','id');
    }
    public function username()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}


