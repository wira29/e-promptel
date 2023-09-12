<?php

namespace App\Services;

use App\Enums\UploadDiskEnum;
use App\Http\Requests\Agenda\StoreRequest;
use App\Http\Requests\Agenda\UpdateRequest;
use App\Models\Agenda;
use App\Traits\UploadTrait;

class AgendaService
{
    use UploadTrait;

    /**
     * Handle store agendas into tables
     *
     * @param StoreRequest $request
     * @return array
     */

    public function store(StoreRequest $request): array
    {
        $data = $request->validated();

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $this->upload(UploadDiskEnum::AGENDAS->value, $request->file('thumbnail'));
        }

        return $data;
    }

    /**
     * Handle update agendas into tables
     *
     * @param Agenda $agenda
     * @param UpdateRequest $request
     * @return array
     */

    public function update(Agenda $agenda, UpdateRequest $request): array
    {
        $data = $request->validated();
        $data['thumbnail'] = $agenda->thumbnail;

        if ($request->hasFile('thumbnail')) {
            $this->remove($data['thumbnail']);
            $data['thumbnail'] = $this->upload(UploadDiskEnum::AGENDAS->value, $request->file('thumbnail'));
        }

        return $data;
    }

}
