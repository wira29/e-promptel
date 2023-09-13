<?php

namespace App\Base\Interfaces;

use Illuminate\Database\Eloquent\Relations\HasMany;

interface HasQuestions
{
    /**
     * One-to-Many relationship with Questions Model
     *
     * @return HasMany
     */

    public function questions(): HasMany;
}
