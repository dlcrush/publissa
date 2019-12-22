<?php

namespace App\Repositories\Criteria;

use App\Repositories\Contracts\Repository;

abstract class Criteria {

    public abstract function apply($model, Repository $repository);

}
