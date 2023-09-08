<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\VisionMissionInterface;
use App\Models\VisionMission;

class VisionMissionRepository extends BaseRepository implements VisionMissionInterface
{

    public function __construct(VisionMission $visionMission)
    {
        $this->model = $visionMission;
    }

    /**
     * Handle the Get all data event from models.
     *
     * @return mixed
     */
    public function get(): mixed
    {
        return $this->model->query()
            ->firstOrFail();
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
        return $this->model->query()
            ->findOrFail($id)
            ->update($data);
    }
}
