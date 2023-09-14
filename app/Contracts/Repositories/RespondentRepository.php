<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\AboutInterface;
use App\Contracts\Interfaces\RespondentInterface;
use App\Models\About;
use App\Models\Respondent;

class RespondentRepository extends BaseRepository implements RespondentInterface
{

    public function __construct(Respondent $respondent)
    {
        $this->model = $respondent;
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
