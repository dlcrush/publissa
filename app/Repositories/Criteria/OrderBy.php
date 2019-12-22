<?php

namespace App\Repositories\Criteria;

use App\Repositories\Contracts\Repository;

class OrderBy extends Criteria {

    protected $fields;
    protected $order;

    public function __construct($fields=[], $order='asc') {
        $this->fields = $fields;
        $this->order = $order == 'desc' ? 'desc' : 'asc';
    }

    public function apply($model, Repository $repository) {
        $query = $model->orderBy($this->fields, $this->order);
        return $query;
    }

}
