<?php

namespace App\Repositories;

use App\Repositories\Contracts\TagRepository as TagRepositoryInterface;

class TagRepository extends Repository implements TagRepositoryInterface {

    public function model() {
        return '\App\Tag';
    }

}
