<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BancoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

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


    public function testIndex()
    {
        $token = $this->getToken();
        $response = $this->get('/api/banco', ['Authorization' => "Bearer $token"]);
        $response->assertStatus(200);
    }

    public function testShow()
    {
        $token = $this->getToken();
        $banco = \App\Models\Banco::factory()->create();
        $response = $this->get("/api/banco/show/$banco->id", ['Authorization' => "Bearer $token"]);
        $response->assertStatus(200);
    }

    public function testCreate()
    {
        $token = $this->getToken();
        $banco = \App\Models\Banco::factory()->make();

        $response = $this->post("/api/banco/create/", [
            'nome_banco' => $banco->nome_banco,
            'codigo_banco' => $banco->codigo_banco,
        ], ['Authorization' => "Bearer $token"]);

        $response->assertStatus(201);
    }

    public function testUpdate()
    {
        $token = $this->getToken();
        $banco = \App\Models\Banco::factory()->create();

        $response = $this->put("/api/banco/update/$banco->id", [
            'nome_banco' => $banco->nome_banco,
        ], ['Authorization' => "Bearer $token"]);

        $response->assertStatus(200);
    }

    public function testDelete()
    {
        $token = $this->getToken();
        $banco = \App\Models\Banco::factory()->create();
        $response = $this->json('delete', 'api/banco/destroy/' . $banco->id, [], ['Authorization' => "Bearer $token"]);
        $response->assertStatus(200);
    }
}
