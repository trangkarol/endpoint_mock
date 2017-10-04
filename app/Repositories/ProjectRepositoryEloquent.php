<?php

namespace App\Repositories;

use App\Contracts\Repositories\ProjectRepository;
use App\Eloquent\Project;

class ProjectRepositoryEloquent extends AbstractRepositoryEloquent implements ProjectRepository
{
    public function model()
    {
        return app(Project::class);
    }

    public function create($data)
    {
        $data['user_id'] = $this->user->id;
        $this->model()->create(array_only($data, [
            'name',
            'description',
            'image',
        ]));
    }

    public function update($data)
    {
        $data['user_id'] = $this->user->id;
        $this->model()->update(array_only($data, [
            'name',
            'description',
            'image',
        ]));
    }
}
