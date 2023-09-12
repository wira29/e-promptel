<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\AboutLandingInterface;
use App\Contracts\Interfaces\ArticleLandingInterface;
use App\Contracts\Repositories\BaseRepository;
use App\Models\About;
use App\Models\Article;
use Illuminate\Pagination\LengthAwarePaginator;

class AboutLandingRepository extends BaseRepository implements AboutLandingInterface
{

    public function __construct(About $about)
    {
        $this->model = $about;
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
