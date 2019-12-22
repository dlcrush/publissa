<?php

namespace App\Repositories;

use App\Repositories\Contracts\CategoryRepository as CategoryRepositoryInterface;

class CategoryRepository extends Repository implements CategoryRepositoryInterface {

    public function model() {
        return '\App\Category';
    }

}
