<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\DatatableInterface;
use App\Contracts\Interfaces\Eloquent\DeleteInterface;
use App\Contracts\Interfaces\Eloquent\GetInterface;
use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;

interface ActivityInterface extends GetInterface, DatatableInterface, StoreInterface, UpdateInterface, DeleteInterface
{

}
