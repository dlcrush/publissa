<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Site;

class SiteTransformer extends TransformerAbstract {

    protected $availableIncludes = [];

    public function transform(Site $site)
    {
        return [
            'id' => (int) $site->id,
            'name' => $site->name,
            'slug' => $site->slug
        ];
    }

}
