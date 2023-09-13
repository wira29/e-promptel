<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::query()->create([
            'description' => '<p>TeFa House of Health Promotion - Program Studi Promosi Kesehatan Gedung Kesehatan Lt 3 Politeknik Negeri Jember Jl Mastrip PO BOX 164  Jember, Jawa Timur</p>'
        ]);
    }
}
