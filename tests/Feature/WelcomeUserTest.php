<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUserTest extends TestCase
{
    /** @test */
    function it_welcomes_users_with_nickname(){
        $this -> get('/saludo/joan/J')
            ->assertStatus(200)
            ->assertSee('Hola usuario Joan, tu nickname es J');
    }

    /** @test */
    function it_welcomes_users_without_nickname(){
        $this -> get('/saludo/joan')
            ->assertStatus(200)
            ->assertSee('Hola usuario Joan');
    }
}
