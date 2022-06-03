<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create(['name' => "Admin1", 'email' => 'admin1@gmail.com', 'password' => bcrypt('admin1ganteng')]);
        Category::create(['name' => "Museum"]);
        Category::create(['name' => "Galeri"]);
        Category::create(['name' => "Kuliner"]);
        Category::create(['name' => "Tempat Rekreasi"]);
    }
}
