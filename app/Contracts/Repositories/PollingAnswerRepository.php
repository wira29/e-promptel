<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\CountPollingAnswerInterface;
use App\Models\Poll;
use App\Models\PollAnswer;
use Illuminate\Pagination\LengthAwarePaginator;

class PollingAnswerRepository extends BaseRepository implements CountPollingAnswerInterface
{

    public function __construct(PollAnswer $pollAnswer)
    {
        $this->model = $pollAnswer;
    }

    /**
     * @param int $pollId
     * @return mixed
     */
    public function countPollingAnswer(int $pollId): mixed
    {
        return $this->model->query()
            ->selectRaw('question_id, answer, count(*) as count')
            ->with('question')
           ->whereRelation('question', function($q) use($pollId) {
                return $q->where('poll_id', $pollId);
           })
            ->groupBy(['question_id', 'answer'])
            ->get();
    }
}
