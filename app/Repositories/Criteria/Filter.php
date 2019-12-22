<?php

namespace App\Repositories\Criteria;

use App\Repositories\Contracts\Repository;

class Filter extends Criteria {

    protected $field;
    protected $value;

    public function __construct($field, $value) {
        $this->field = $field;
        $this->value = $value;
    }

    public function apply($model, Repository $repository) {
        $query = $model->where($this->field, '=', $this->value);
        return $query;
    }

}
