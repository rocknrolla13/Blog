<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{

    public function posts()
    {
        return $this->belongsToMany('App\Models\post','category_posts')->orderBy('created_at','DESC')->paginate(5);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }


    use HasFactory;
}
