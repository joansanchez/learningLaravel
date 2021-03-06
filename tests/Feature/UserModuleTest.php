<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test */
    function it_loads_the_user_page()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Usuarios')
            ->assertSee('Joel')
            ->assertSee('Carlos');
    }

    /** @test */
    function it_loads_the_new_user_page(){
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear nuevo usuario');
    }



}
