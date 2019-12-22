<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'user_id'];

    public function user() {
        return $this->hasOne('App\User');
    }

    public function posts() {
        return $this->hasMany('App\Post')->orderBy('posts.created_at');
    }

    public function categories() {
        return $this->hasMany('App\Category')->orderBy('categories.name');
    }

    public function tags() {
        return $this->hasMany('App\Tag')->orderBy('tags.name');
    }
}
