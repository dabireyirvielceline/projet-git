<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Database\Seeders\cohortestableseeder;
use Database\Seeders\apprenanttableseeder;
use App\Models\apprenant;

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
        $this->call(cohortestableseeder::class);
        apprenant::factory(30)->create();
    }
}
