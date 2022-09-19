<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Question;
use App\Models\Competencies;
use Illuminate\Support\Facades\Request;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CrudQuestionsTest extends TestCase
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
    public function test_a_question_can_be_create() {
        $this-> withExceptionHandling();
        $response = $this->post(route('storeEvent'), [
            'title' => 'new title',
            'description' => 'new description',
            'total_people' => '15',
            'image' => 'new image',
            'date' => '2008-06-23 02:11:28',
            'start_hour'=>'10:00'
        ]);

            $userNoAdmin = User::factory()->create(['isAdmin'=>false]);
            $this->actingAs($userNoAdmin);

            $response = $this->post(route('storeEvent'), [
                'title' => 'new title',
                'description' => 'new description',
                'total_people' => '15',
                'image' => 'new image',
                'date' => '2008-06-23 02:11:28',
                'start_hour'=>'10:00'
        ]);
        $this->assertCount(1, Event::all());

}
