<?php

namespace App\Services;

use App\Enums\UploadDiskEnum;
use App\Http\Requests\OrganizationRequest;
use App\Models\Organization;
use App\Traits\UploadTrait;

class OrganizationService
{
    use UploadTrait;

    /**
     * Handle update article into tables
     *
     * @param Organization $organization
     * @param OrganizationRequest $request
     * @return array
     */

    public function update(Organization $organization, OrganizationRequest $request): array
    {
        $data = $request->validated();
        $data['photo'] = $organization->photo;

        if ($request->hasFile('photo')) {
            $this->remove($data['photo']);
            $data['photo'] = $this->upload(UploadDiskEnum::ORGANIZATIONS->value, $request->file('photo'));
        }

        return $data;
    }

}
