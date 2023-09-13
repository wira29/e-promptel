<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\DeleteInterface;
use App\Contracts\Interfaces\Eloquent\StoreInterface;

interface QuestionInterface extends StoreInterface, DeleteInterface
{

}
