<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnderecoIncorporadoraTest extends TestCase
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
        $response = $this->get('/api/endereco_incorporadora', ['Authorization' => "Bearer $token"]);
        $response->assertStatus(200);
    }

    public function testShow()
    {
        $token = $this->getToken();
        $enderecoIncorporadora = \App\Models\EnderecoIncorporadora::factory()->create();
        $response = $this->get("/api/endereco_incorporadora/show/$enderecoIncorporadora->id", ['Authorization' => "Bearer $token"]);
        $response->assertStatus(200);
    }

    public function testCreate()
    {
        $token = $this->getToken();
        $enderecoIncorporadora = \App\Models\EnderecoIncorporadora::factory()->make();

        $response = $this->post("/api/endereco_incorporadora/create/", [
            'cep' => $enderecoIncorporadora->cep,
            'rua' => $enderecoIncorporadora->rua,
            'bairro' => $enderecoIncorporadora->bairro,
            'cidade' => $enderecoIncorporadora->cidade,
            'estado' => $enderecoIncorporadora->estado,
            'numero' => $enderecoIncorporadora->numero,
        ], ['Authorization' => "Bearer $token"]);

        $response->assertStatus(201);
    }

    public function testUpdate()
    {
        $token = $this->getToken();
        $enderecoIncorporadora = \App\Models\EnderecoIncorporadora::factory()->create();

        $response = $this->put("/api/endereco_incorporadora/update/$enderecoIncorporadora->id", [
            'cep' => '55555-555',
        ], ['Authorization' => "Bearer $token"]);

        $response->assertStatus(200);
    }

    public function testDelete()
    {
        $token = $this->getToken();
        $enderecoIncorporadora = \App\Models\EnderecoIncorporadora::factory()->create();
        $response = $this->json('delete', 'api/endereco_incorporadora/destroy/' . $enderecoIncorporadora->id, [], ['Authorization' => "Bearer $token"]);
        $response->assertStatus(200);
    }
}
