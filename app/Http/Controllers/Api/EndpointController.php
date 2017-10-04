<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\EndpointRepository;
use App\Eloquent\Endpoint;

class ProjectController extends ApiController
{
    public function __construct(EndpointRepository $repository)
    {
        parent::__construct($repository);
    }
}
