<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [RoleEnum::ADMIN->value, RoleEnum::USER->value];

        foreach ($users as $user) {
            $role = Role::create([
                'name' => $user
            ]);

            $profile = User::query()
                ->create([
                    'name' => $user,
                    'civil_identity_number' => rand(0, 99999),
                    'username' => strtolower($user),
                    'password' => bcrypt('password'),
                    'email_verified_at' => now()
                ]);

            $profile->assignRole($role);
        }

    }
}
