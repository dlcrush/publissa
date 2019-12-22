<?php

namespace App\Repositories;

use App\Repositories\Contracts\PostRepository as PostRepositoryInterface;

class PostRepository extends Repository implements PostRepositoryInterface {

    public function model() {
        return '\App\Post';
    }

}
