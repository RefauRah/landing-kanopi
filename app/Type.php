<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['name', 'slug'];

    public function posts(){
        return $this->belongsToMany('App\Posts');
    }
}
