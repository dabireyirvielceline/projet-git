<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cohortestableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("cohorte")->insert([
            ["libelle"=>"cohorte 1"],
            ["libelle"=>"cohorte 2"],
            ["libelle"=>"cohorte 3"],
        ]);
    }
}

