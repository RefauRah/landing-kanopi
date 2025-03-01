<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Post extends Model
{
    use softDeletes;

    protected $fillable = ['judul', 'category_id', 'content', 'gambar', 'total', 'slug', 'users_id'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Tags');
    }

    public function types(){
        return $this->belongsToMany('App\Type');
    }

    public function users(){
        return $this->belongsTo('App\User');
    }
}
