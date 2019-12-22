<?php

namespace App\Repositories\Criteria;

use App\Repositories\Contracts\Repository;

class Expand extends Criteria {

    protected $fields;

    public function __construct($fields=[]) {
        $this->fields = $fields;
    }

    public function apply($model, Repository $repository) {
        $query = $model->with($this->fields);
        return $query;
    }

}
