<?php

namespace App\Repositories\Criteria;

use App\Repositories\Contracts\Repository;

class Take extends Criteria {

    protected $num;

    public function __construct($num=1) {
        $this->num = $num;
    }

    public function apply($model, Repository $repository) {
        $query = $model->take($this->num);
        return $query;
    }

}
