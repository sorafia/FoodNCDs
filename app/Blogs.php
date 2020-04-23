<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $table = 'blog';
    protected $fillable = [
        'title',    
        'body',
        'cause',
        'symptom',
        'eat',    
        'published_at' 
    ];
    protected $guarded = ['id'];
}
