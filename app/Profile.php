<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'height',
        'weight',
        'age'
    ];

    protected $guarded = ['id'];

    // public function user(){
    //     return $this->belongsTo('App\User');
    // }

    public function ncds(){
        return $this->belongsToMany('App\Ncd')
            ->withTimestamps();
    }

    public function getNcdListAttribute(){
        return $this->ncds->pluck('id');
    }

    public function foodallergies(){
        return $this->belongsToMany('App\Foodallergy')
            ->withTimestamps();
    }

    public function getFoodallergyListAttribute(){
        return $this->foodallergies->pluck('id');
    }

    public function gender(){
        return $this->belongsTo('App\Gender');
    }

    public function exercisebehavior(){
        return $this->belongsTo('App\Exercisebehavior');
    }

}
