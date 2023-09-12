<?php

namespace App\Helpers;

use App\Traits\UploadTrait;
use Illuminate\Support\Facades\File;

class UploadHelper
{
    use UploadTrait;

    /**
     * Handle Copy file from public to specified storage
     * @param string $source
     * @param string $disk
     * @return string
     */

    public function move(string $source, string $disk): string
    {
        if (!File::exists($source)) return false;

        $this->makeDirectory($disk);

        $destination = $disk . DIRECTORY_SEPARATOR . pathinfo($source)['basename'];

        File::copy($source, storage_path('app/public/' . $destination));

        return $destination;
    }

}
