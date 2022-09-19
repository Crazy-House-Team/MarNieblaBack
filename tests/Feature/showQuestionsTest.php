<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Question;
use App\Models\Competencies;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class showQuestionsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_checkIfQuestionAreListedInJsonFileWithShowRoute() {

        $this->withExceptionHandling();
        Competencies::factory(3)->create();
        $questions=Question::factory(2)->create();
        $this->assertCount(2, Question::all());
        $this->assertCount(3, Competencies::all());
        $question= $questions[0];
        $response = $this->get(route('ShowQuestionApi', $question->id));
        $response->assertStatus(200)
        ->assertJsonCount(1)
        ->assertSee($question->question);
        
    }
}
