<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ScoutFactory extends Factory
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
            // $table->text('scout_name');
            // $table->text('role');
            // $table->text('bio');
            'scout_name' => $this->faker->sentence, //Generates a fake sentence
            'role' => $this->faker->sentence,//Generates a User from factory and extracts id
            'team' => $this->faker->sentence,
        ];
    }
}
