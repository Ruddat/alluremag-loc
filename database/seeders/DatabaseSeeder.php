<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@admin.lt',
            'password' => bcrypt('Ruddat66'),
      ]);
      User::factory()->create([
        'name' => 'Owner',
        'email' => 'adolf.admin@admin.lt',
        'password' => bcrypt('Ruddat66'),
        ]);

        User::factory(10)->create();
    }
}
