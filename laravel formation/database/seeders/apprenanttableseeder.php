<?php

namespace Database\Seeders;

use App\Models\Apprenant; // Assurez-vous que le chemin et le nom du modèle sont corrects
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class apprenanttableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apprenants')->insert([
            ['nom'=>'DABIRE' ,'prenom'=>'APPOLINAIRE', 'cohorte_id'=>'1'],
            ['nom'=>'DABIRE','prenom'=>'BEATRICE','cohorte_id'=>'2'],
            ['nom'=>'BADOLO','prenom'=>'STVE','cohorte_id'=>'3']
        ]);
        
    }
}
 