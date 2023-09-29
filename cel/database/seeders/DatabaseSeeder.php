<?php

namespace Database\Seeders;

use App\Models\apprenant;
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
        // \App\Models\User::factory(10)->create();
         $this->call(cohortetableseeder::class); 

        apprenant::factory(30)->create();
    }
}
