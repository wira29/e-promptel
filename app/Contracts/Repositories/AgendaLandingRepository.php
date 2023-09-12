<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\AgendaLandingInterface;
use App\Contracts\Repositories\BaseRepository;
use App\Models\Article;
use Illuminate\Pagination\LengthAwarePaginator;

class AgendaLandingRepository extends BaseRepository implements AgendaLandingInterface
{

    public function __construct(Article $article)
    {
        $this->model = $article;
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
            ->where('slug', $id)
            ->first();
    }

    /**
     * get latest data
     *
     * @param int $limit
     * @return mixed
     */
    public function getLatest(int $limit = 5): mixed
    {
        return $this->model->query()
            ->latest()
            ->take($limit)
            ->get();
    }
}
