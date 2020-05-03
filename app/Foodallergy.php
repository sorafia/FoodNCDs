<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foodallergy extends Model
{
    protected $fillable = ['name'];

    public function profiles(){
        return $this->belongsToMany('App\Profile');
    }
    
}
