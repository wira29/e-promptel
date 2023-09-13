<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\ContactInterface;
use App\Models\Contact;

class ContactRepository extends BaseRepository implements ContactInterface
{

    public function __construct(Contact $contact)
    {
        $this->model = $contact;
    }

    /**
     * Handle the Get all data event from models.
     *
     * @return mixed
     */
    public function get(): mixed
    {
        return $this->model->query()
            ->firstOrFail();
    }

    /**
     * Handle show method and update data instantly from models.
     *
     * @param mixed $id
     * @param array $data
     *
     * @return mixed
     */
    public function update(mixed $id, array $data): mixed
    {
        return $this->model->query()
            ->findOrFail($id)
            ->update($data);
    }
}
