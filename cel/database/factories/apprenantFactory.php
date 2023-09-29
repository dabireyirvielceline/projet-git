<?php

namespace Database\Factories;

use App\Models\apprenant;
use Illuminate\Database\Eloquent\Factories\Factory;

class apprenantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = apprenant:: class;
    public function definition()
    {
        return [
            'nom' => $this->faker->firstname(),
            'prenom' => $this->faker->lastname(),
            'cohorte_id' =>rand(1,3)
        ];
    }
}
