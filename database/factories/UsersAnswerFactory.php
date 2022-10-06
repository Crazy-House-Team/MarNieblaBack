<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Users_answer>
 */
class UsersAnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date' => fake()->date(),
            'user_id'=> $this->faker->numberBetween($min = 1, $max = 3),
            'right_answer'=>$this->faker->numberBetween($min = 0, $max = 20),
            'id_exam'=> $this->faker->numberBetween($min = 1, $max = 10),

        ];
    }
}
