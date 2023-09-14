<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\QuestionLandingInterface;
use App\Contracts\Repositories\BaseRepository;
use App\Models\Activity;
use App\Models\Question;
use Illuminate\Pagination\LengthAwarePaginator;

class QuestionLandingRepository extends BaseRepository implements QuestionLandingInterface
{

    public function __construct(Question $question)
    {
        $this->model = $question;
    }

    /**
     * get data paginate
     *
     * @param mixed $id
     * @return mixed
     */
    public function show(mixed $id): mixed
    {
        return $this->model->query()
            ->where('poll_id', $id)
            ->get();
    }
}
