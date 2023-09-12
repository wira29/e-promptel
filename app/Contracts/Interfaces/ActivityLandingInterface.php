<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\GetLatestInterface;
use App\Contracts\Interfaces\Eloquent\Paginate\PaginateInterface;
use App\Contracts\Interfaces\Eloquent\ShowInterface;

interface ActivityLandingInterface extends PaginateInterface, ShowInterface, GetLatestInterface
{
}
