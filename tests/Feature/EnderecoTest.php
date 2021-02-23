<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnderecoTest extends TestCase
{
    public function getToken()
    {
        $user = \App\Models\User::factory()->make();

        $user->password = bcrypt('1234');
        $user->save();

        $response = $this->post('/api/login', [
            'email' => $user->email,
            'password' => '1234'
        ], []);

        return $response['access_token'];
    }

    /** @test */
    public function regras_de_validacao_create()
    {
        $user = \App\Models\User::factory()->create();

        if(\Auth::user()->endereco->count()) {

        }
    }
}
