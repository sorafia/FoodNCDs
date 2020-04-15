<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $table = 'blog';
    protected $fillable = [
        'title',    
        'body',    
        'published_at' 
    ];
    protected $guarded = ['id'];
}
