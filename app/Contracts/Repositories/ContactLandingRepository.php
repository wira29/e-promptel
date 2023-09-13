<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\AboutLandingInterface;
use App\Contracts\Interfaces\ContactLandingInterface;
use App\Contracts\Repositories\BaseRepository;
use App\Models\Contact;

class ContactLandingRepository extends BaseRepository implements ContactLandingInterface
{

    public function __construct(Contact $contact)
    {
        $this->model = $contact;
    }

    /**
     * get data paginate
     *
     * @return mixed
     */
    public function get(): mixed
    {
        return $this->model->query()->first();
    }
}
