<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use Sluggable;

    public function posts(){
        return $this->belongsToMany('App\Post');
    }

    public function sluggable(): array
    {
        return [
            'source' => 'name',
            'onUpdate' => true,
        ];
    }
}
