<?php

namespace App\Services;

use App\Enums\UploadDiskEnum;
use App\Http\Requests\ProfileRequest;
use App\Traits\UploadTrait;

class ProfileService
{
    use UploadTrait;

    /**
     * Handle update profile into tables
     *
     * @param ProfileRequest $request
     * @return array
     */

    public function update(ProfileRequest $request): array
    {
        $data = $request->validated();
        $data['photo'] = auth()->user()->photo;

        if ($request->hasFile('photo')) {
            if (!is_null($data['photo']) && $this->exist($data['photo'])) $this->remove($data['photo']);
            $data['photo'] = $this->upload(UploadDiskEnum::USER_PHOTOS->value, $request->file('photo'));
        }

        return $data;
    }
}
