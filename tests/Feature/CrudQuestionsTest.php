<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Question;
use App\Models\Competencies;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;





class CrudQuestionsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_checkIfQuestionsAreListedInJsonFile() {
        $this->withExceptionHandling();

        Competencies::factory(3)->create();
        Question::factory(2)->create();
        $this->assertCount(2, Question::all());
        $this->assertCount(3, Competencies::all());
        $response = $this->get(route('QuestionsApi'));
        $response->assertStatus(200)
        ->assertJsonCount(2);

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
    public function test_a_question_can_be_create()
    {
        $this->withExceptionHandling();
        Competencies::factory(3)->create();
        $this->assertCount(3, Competencies::all());
        $response = $this->post(route('storeQuestionApi'), [
            'question' => 'question 1',
            'answer_a' => 'answer 1',
            'answer_b' => 'answer 2',
            'answer_c' => 'answer 3',
            'answer_d' => 'answer 4',
            'competencies_id' => '1',
            'right_answer' => 'a',
        ]);
        $this->assertCount(1, Question::all());
    }
    public function test_a_question_can_be_update()
    {
        $this->withExceptionHandling();
        Competencies::factory(3)->create();
        $this->assertCount(3, Competencies::all());
        $question=Question::factory()->create();
        $this->assertCount(1, Question::all());
        $response = $this->put(route('QuestionUpdate', $question->id), [
            'question' => 'question 1',
        ]);
        $this->assertCount(1, Question::all());
        $this->assertEquals('question 1', Question::first()->question);
    }

    public function test_checkiFQuestionCanBeDeleted(){
        $this->withExceptionHandling();
        Competencies::factory(3)->create();
        $this->assertCount(3, Competencies::all());
        $questions=Question::factory(2)->create();
        $this->assertCount(2, Question::all());
        $question=$questions[0];
        $response = $this->delete(route('DestroyQuestionApi', $question->id));
        $this->assertCount(1, Question::all());
        $response->assertStatus(200);
    }
    public function test_check_if_random_test_is_send() {
        $this->withExceptionHandling();
        Competencies::factory(3)->create();
        $this->assertCount(3, Competencies::all());
        Question::factory(4)->create();
        $this->assertCount(4, Question::all());
        $response = $this->get(route('RandomTestApi', 0));
        $response->assertJsonCount(3)
        ->assertStatus(200);
    }
    public function test_check_if_random_math_test_is_send() {
        $this->withExceptionHandling();
        Competencies::factory(3)->create();
        $this->assertCount(3, Competencies::all());
        Question::factory(4)->create(['competencies_id'=>1]);
        $this->assertCount(4, Question::all());
        $response = $this->get(route('RandomTestApi', 1));
        $response->assertJsonCount(3)->assertStatus(200);
    }
    public function test_check_if_random_language_test_is_send() {
        $this->withExceptionHandling();
        Competencies::factory(3)->create();
        $this->assertCount(3, Competencies::all());
        Question::factory(4)->create(['competencies_id'=>2]);
        $this->assertCount(4, Question::all());
        $response = $this->get(route('RandomTestApi', 2));
        $response->assertJsonCount(3)->assertStatus(200);
    }

}