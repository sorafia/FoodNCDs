<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foodallergy_Profile extends Model
{
    protected $table = 'foodallergy_profile';
    protected $fillable = [
        'profile_id',
        'foodallergy_id'
    ];

   
}
