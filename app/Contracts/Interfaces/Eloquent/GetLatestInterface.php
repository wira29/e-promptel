<?php

namespace App\Contracts\Interfaces\Eloquent;

interface GetLatestInterface
{
    /**
     * Handle the Get latest data event from models.
     *
     * @return mixed
     */

    public function getLatest(int $limit = 5): mixed;
}
