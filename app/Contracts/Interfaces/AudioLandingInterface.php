<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\GetLatestInterface;
use App\Contracts\Interfaces\Eloquent\Paginate\PaginateInterface;
use App\Contracts\Interfaces\Eloquent\ShowInterface;

interface AudioLandingInterface extends PaginateInterface, ShowInterface, GetLatestInterface
{
}
