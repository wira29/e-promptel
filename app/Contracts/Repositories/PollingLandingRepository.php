<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\PollingLandingInterface;
use App\Models\Poll;
use Illuminate\Pagination\LengthAwarePaginator;

class PollingLandingRepository extends BaseRepository implements PollingLandingInterface
{

    public function __construct(Poll $poll)
    {
        $this->model = $poll;
    }

    /**
     * get data paginate
     *
     * @param int $pagination
     * @return LengthAwarePaginator
     */
    public function paginate(int $pagination = 10): LengthAwarePaginator
    {
        return $this->model->query()->paginate($pagination);
    }

    /**
     * show data
     *
     * @param mixed $id
     * @return mixed
     */
    public function show(mixed $id): mixed
    {
        return $this->model->query()
            ->where('id', $id)
            ->first();
    }
}
