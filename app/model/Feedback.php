<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'name',
        'address',
        'pin',
        'dob',
        'mobile',
        'todays_date',
        'description',
        'amount'
    ];

}
