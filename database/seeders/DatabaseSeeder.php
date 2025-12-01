<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleAndPermissionSeeder::class,
            SuperAdminSeeder::class,
        ]);

        // only for local, testing or staging environments
        if (App::environment('local', 'testing', 'staging')) {
            $this->call([
                //
            ]);
        }
    }
}
