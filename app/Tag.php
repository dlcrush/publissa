<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name', 'slug', 'site_id', 'user_id'];

    public function app() {
        return $this->hasOne('App\Site');
    }

}
