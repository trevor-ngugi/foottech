<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeamDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "playerName" => $this->faker->name,
            "position" => $this->faker->word,
            "teamFk_id" => \App\Models\Team::factory()->create()->id,
        ];
    }
}
