<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
   protected $model=Team::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'tm_id'=>\App\Models\TeamManager::factory()->create()->id,
            'team_name'=>$this->faker->company
        ];
    }
}
