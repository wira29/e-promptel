<?php

namespace Database\Seeders;

use App\Models\VisionMission;
use Illuminate\Database\Seeder;

class VisionMissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VisionMission::query()->create([
            'vision' => '<p>Visi Kami</p>',
            'mission' => '<p>Misi Kami</p>'
        ]);
    }
}
