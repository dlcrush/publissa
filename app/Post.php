<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'body', 'excerpt', 'description', 'site_id', 'user_id', 'type_id'];

    public function user() {
        return $this->hasOne('App\User');
    }

    public function app() {
        return $this->hasOne('App\Site');
    }
}
