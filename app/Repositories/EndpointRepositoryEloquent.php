<?php

namespace App\Repositories;

use App\Contracts\Repositories\UserRepository;
use App\Eloquent\Endpoint;

class EndpointRepositoryEloquent extends AbstractRepositoryEloquent implements EndpointRepository
{
    public function model()
    {
        return app(Endpoint::class);
    }
}
