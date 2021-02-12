<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class post extends Model
{

    public function tags(){

        return $this->belongsToMany('App\Models\tag',"post_tags");

    }

    public function categories(){

        return $this->belongsToMany("App\Models\category","category_posts");
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    //public $timestamps = false;
}
