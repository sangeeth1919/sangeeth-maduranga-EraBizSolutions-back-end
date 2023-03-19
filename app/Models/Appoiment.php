<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appoiment extends Model
{
    use HasFactory;

    protected $fillable = ['patient_name','patient_mobile','patient_email','appoiment_date','doctor_id'];
}
