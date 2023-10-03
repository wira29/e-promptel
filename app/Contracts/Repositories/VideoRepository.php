<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\VideoInterface;
use App\Models\Video;
use App\Traits\Datatables\VideoDatatable;
use Exception;

class VideoRepository extends BaseRepository implements VideoInterface
{
    use VideoDatatable;

    public function __construct(Video $video)
    {
        $this->model = $video;
    }

    /**
     * Handle get data instantly from models using datatables.
     *
     * @return mixed
     * @throws Exception
     */
    public function datatable(): mixed
    {
        return $this->VideoMockup($this->model->query());
    }

    /**
     * Handle show method and delete data instantly from models.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function delete(mixed $id): mixed
    {
        return $this->model->query()
            ->findOrFail($id)
            ->delete();
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
     * Handle store data event to models.
     *
     * @param array $data
     *
     * @return mixed
     */
    public function store(array $data): mixed
    {
        return $this->model->query()
            ->create($data);
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

    /**
     * Handle count all data event from models.
     *
     * @param array|null $data
     *
     * @return int
     */
    public function count(?array $data): int
    {
        return $this->model->query()
            ->count();
    }
}
