<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BlogsTableSeeder::class);
        // \App\Models\User::factory(2)->create();
        // $this->call(BlogsTableSeeder::class);
    }
}
