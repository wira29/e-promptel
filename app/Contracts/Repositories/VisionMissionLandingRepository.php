<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\VisionMissionLandingInterface;
use App\Contracts\Repositories\BaseRepository;
use App\Models\VisionMission;

class VisionMissionLandingRepository extends BaseRepository implements VisionMissionLandingInterface
{

    public function __construct(VisionMission $visionMission)
    {
        $this->model = $visionMission;
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
