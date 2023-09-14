<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\AboutInterface;
use App\Contracts\Interfaces\PollAnswerInterface;
use App\Contracts\Interfaces\RespondentInterface;
use App\Models\About;
use App\Models\PollAnswer;
use App\Models\Respondent;

class PollAnswerRepository extends BaseRepository implements PollAnswerInterface
{

    public function __construct(PollAnswer $pollAnswer)
    {
        $this->model = $pollAnswer;
    }

    /**
     * handle store data
     *
     * @param array $data
     * @return mixed
     */
    public function store(array $data): mixed
    {
        return $this->model->create($data);
    }
}
