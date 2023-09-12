<?php

namespace App\Services;

use App\Enums\UploadDiskEnum;
use App\Http\Requests\Activity\StoreRequest;
use App\Http\Requests\Activity\UpdateRequest;
use App\Models\Activity;
use App\Traits\UploadTrait;

class ActivityService
{
    use UploadTrait;

    /**
     * Handle store activities into tables
     *
     * @param StoreRequest $request
     * @return array
     */

    public function store(StoreRequest $request): array
    {
        $data = $request->validated();

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $this->upload(UploadDiskEnum::ACTIVITIES->value, $request->file('thumbnail'));
        }

        return $data;
    }

    /**
     * Handle update activities into tables
     *
     * @param Activity $activity
     * @param UpdateRequest $request
     * @return array
     */

    public function update(Activity $activity, UpdateRequest $request): array
    {
        $data = $request->validated();
        $data['thumbnail'] = $activity->thumbnail;

        if ($request->hasFile('thumbnail')) {
            $this->remove($data['thumbnail']);
            $data['thumbnail'] = $this->upload(UploadDiskEnum::ACTIVITIES->value, $request->file('thumbnail'));
        }

        return $data;
    }

}
