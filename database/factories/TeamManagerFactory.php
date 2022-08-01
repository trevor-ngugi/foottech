<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\TeamManager;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamManagerFactory extends Factory
{
    
    protected $model=TeamManager::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name'=>$this->faker->userName,
            'age'=>$this->faker->randomDigitNotNull

        ];
    }
}
