<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\OrganizationLandingInterface;
use App\Contracts\Repositories\BaseRepository;
use App\Models\Organization;

class OrganizationLandingRepository extends BaseRepository implements OrganizationLandingInterface
{

    public function __construct(Organization $organization)
    {
        $this->model = $organization;
    }

    /**
     * get data paginate
     *
     * @return mixed
     */
    public function get(): mixed
    {
        return $this->model->query()->first();
    }
}
