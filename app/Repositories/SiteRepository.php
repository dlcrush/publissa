<?php

namespace App\Repositories;

use App\Repositories\Contracts\SiteRepository as SiteRepositoryInterface;

class SiteRepository extends Repository implements SiteRepositoryInterface {

    public function model() {
        return '\App\Site';
    }

}
