<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\OrganizationInterface;
use App\Models\Organization;

class OrganizationRepository extends BaseRepository implements OrganizationInterface
{
    public function __construct(Organization $organization)
    {
        $this->model = $organization;
    }

    /**
     * Handle the Get all data event from models.
     *
     * @return mixed
     */
    public function get(): mixed
    {
        // TODO: Implement get() method.
    }

    /**
     * Handle show method and update data instantly from models.
     *
     * @param mixed $id
     * @param array $data
     *
     * @return mixed
     */
    public function update(mixed $id, array $data): mixed
    {
        // TODO: Implement update() method.
    }
}
