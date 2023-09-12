<?php

namespace Database\Seeders;

use App\Enums\UploadDiskEnum;
use App\Helpers\UploadHelper;
use App\Models\Organization;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $upload = new UploadHelper();

        Organization::query()->create([
            'photo' => str_replace("\\", "/", $upload->move(public_path('struktur-organisasi.jpg'), UploadDiskEnum::ORGANIZATIONS->value)),
            'description' => '<p>Test Deskripsi Organisasi</p>'
        ]);
    }
}
