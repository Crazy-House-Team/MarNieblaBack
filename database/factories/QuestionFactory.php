<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "question"=>$this->faker->sentence($nbWords = 6, $variableNbWords = true),
            "answer_a"=> $this->faker->word,
            "answer_b"=> $this->faker->word,
            "answer_c"=> $this->faker->word,
            "answer_d"=> $this->faker->word,
            "competencies_id"=> $this->faker->numberBetween($min = 1, $max = 3),
            "right_answer"=> $this->faker->randomElement($array= array ('a','b','c')),
        ];
    }
}
