<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    protected $fillable =
        [
        'name',
        'weight',
        'energy',
        'carbohydrate',
        'protein',
        'lipid',
        'sodium',
        'egg',
        'nuts',
        'peanuts',
        'soy',
        'shrimps',
        'crab',
        'fish',
        'image',
    ];
}
