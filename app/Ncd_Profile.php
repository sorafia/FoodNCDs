<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ncd_Profile extends Model
{
    protected $table = 'ncd_profile';
    protected $fillable = [
        'profile_id',
        'ncd_id'
    ];

}
