<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function patterns()
    {
        return $this->hasMany('App\Pattern');
    }

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }
}
