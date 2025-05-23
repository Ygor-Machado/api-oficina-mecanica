<?php

namespace Database\Seeders;

use App\Models\AutoPart;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();



        $this->call([
            UserTypeSeeder::class,
            StatusSeeder::class,
            RepairShopSeeder::class,
            BrandSeeder::class,
            CarSeeder::class,
        ]);

        User::factory()->create([
            'user_type_id' => 1,
            'name' => 'Admin',
            'email' => 'admin@teste.com',
        ]);
    }
}
