<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class CrudUserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    Use RefreshDatabase;

    public function test_userRead()
    {
        $this->withExceptionHandling();
        User::factory(2)->create();
        $this->assertCount(2 ,User::all());
        $response = $this->get(route('UserApi'));
        $response->assertStatus(200)->assertJsonCount(2);

    }

    public function test_userShow()
    {
        $this->withExceptionHandling();
        $users = User::factory(2)->create();
        $this->assertCount(2, User::all());
        $user = $users[0];
        $response = $this->get(route('showUserApi', $user->id));
        $response->assertStatus(200)->assertJsonCount(1)->assertSee($user->email);
    }

    public function test_userStore()
    {
        $this->withExceptionHandling();

        $response = $this->post(route('StoreUserApi'), [
            'name'=>'alumno438',
            'password'=>'alumno438',
            'email'=> 'alumno438@alumno438.com',
            'isadmin'=> '0']);
        $this->assertCount(1 , User::all());
    }
    public function test_a_user_can_be_update()
    {
        $this->withExceptionHandling();
        $user = User::factory()->create();
        $this->assertCount(1, User::all());
        $response = $this->put(route('updateUserApi', $user->id), [
            'name' => 'dani',
        ]);
        $this->assertCount(1, User::all());
        $this->assertEquals('dani', User::first()->name);
    }
    public function test_checkiFUserCanBeDeleted()
    {
        $this->withExceptionHandling();
        $users = User::factory(2)->create();
        $this->assertCount(2, User::all());
        $user = $users[0];
        $response = $this->delete(route('deleteUserApi', $user->id));
        $this->assertCount(1, User::all());
        $response->assertStatus(200);
    }
}