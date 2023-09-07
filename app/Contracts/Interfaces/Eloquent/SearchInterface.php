<?php

namespace App\Contracts\Interfaces\Eloquent;

use Illuminate\Http\Request;

interface SearchInterface
{
    /**
     * Handle the Get all data event from models.
     *
     * @param request $request
     * @return mixed
     */

    public function search(Request $request): mixed;
}
