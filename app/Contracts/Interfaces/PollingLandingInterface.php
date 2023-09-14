<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\Paginate\PaginateInterface;
use App\Contracts\Interfaces\Eloquent\ShowInterface;

interface PollingLandingInterface extends PaginateInterface, ShowInterface
{
}
