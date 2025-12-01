<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'super@admin.com'],
            [
                'name' => 'Superadmin',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        )->assignRole(RoleEnum::SUPER_ADMIN->value);
    }
}
