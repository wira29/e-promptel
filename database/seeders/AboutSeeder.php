<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::query()->create([
            'content' => '<p>Test Konten Tentang Kami</p>'
        ]);
    }
}
