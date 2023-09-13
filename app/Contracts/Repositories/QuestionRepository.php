<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\QuestionInterface;
use App\Models\Question;
use Illuminate\Database\QueryException;

class QuestionRepository extends BaseRepository implements QuestionInterface
{

    public function __construct(Question $question)
    {
        $this->model = $question;
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
        return $this->model->query()->updateOrCreate(
            $data,
            $data
        );
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
        try {
            return $this->model->query()
                ->findOrFail($id)
                ->delete();
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1451) return false;
        }

        return true;
    }
}
