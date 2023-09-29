<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cohortetableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("cohortes")->insert([
         ["libelle"=>"cohorte 1"],
         ["libelle"=>"cohorte 2"],
         ["libelle"=>"cohorte 3"],
        ]);
    }
}
