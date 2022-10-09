<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubscriptionToExamTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_Subscription_route_takes_id_passed_through_url()
    {
        $this->withExceptionHandling();
        User::factory(2)->create();

        $response = $this->post(route('subscribeToExam', '1'));
        $response = $this->post(route('subscribeToExam', '2'));

        $response = $response->content();
        $this->assertEquals('1', $response);
    }
}
