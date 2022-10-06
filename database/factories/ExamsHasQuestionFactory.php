<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exams_Has_Question>
 */
class ExamsHasQuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "exam_id" => $this->faker->numberBetween($min = 1, $max = 15),
            "question_id" => $this->faker->numberBetween($min = 1, $max = 30),
        ];
    }
}
