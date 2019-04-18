<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name', 'description', 'image1' , 'image2' , 'image3' , 'image4' , 'image5' , 'image6', 'ingredients', 'recipe',
    ];

    public function comments()
	{
	  return $this->hasMany('App\Comment');
	}
}
