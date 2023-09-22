<?php

namespace App\Contracts\Interfaces;

interface CountPollingAnswerInterface {

    /**
     * count polling answer by question_id
     *
     * @param int $pollId
     * @return mixed
     */
    public function countPollingAnswer(int $pollId): mixed;
}
