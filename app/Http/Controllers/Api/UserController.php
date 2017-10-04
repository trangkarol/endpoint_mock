<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\UserRepository;
use App\Eloquent\Endpoint;
use App\Eloquent\Field;
use App\Eloquent\Method;
use App\Eloquent\Project;

class UserController extends ApiController
{
    public function __construct(UserRepository $repository)
    {
        parent::__construct($repository);
    }

    public function index()
    {
        // $field1 = Field::create([
        //     'endpoint_id' => 1,
        //     'fields_name' => "name, description, image, is_active, status, start_time, count",
        //     'fields_type' => "string, text, image, boolean, array, date_time, number",
        // ]);
        //
        // $project = Project::first();
        // $field = $project->endpoints()->first()->field()->first();
        // dd($field->mockData());


        return $this->requestAction(function () {
            // $this->compacts['items'] = $this->repository->all();
            $this->compacts['items'] = Field::orderBy('created_at', 'desc')->first();
        });
    }
}
