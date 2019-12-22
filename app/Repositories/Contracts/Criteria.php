<?php

namespace App\Repositories\Contracts;

use App\Repositories\Criteria\Criteria as C;

interface Criteria {

    public function skipCriteria($status = true);

    public function getCriteria();

    public function getByCriteria(C $criteria);

    public function pushCriteria(C $criteria);

    public function clearCriteria();

    public function applyCriteria();

}
