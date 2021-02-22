<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EstadoCivilTest extends TestCase
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


    public function testIndex()
    {
        $token = $this->getToken();
        $response = $this->get('/api/estado_civil/', ['Authorization' => "Bearer $token"]);
        $response->assertStatus(200);
    }

    public function testShow()
    {
        $token = $this->getToken();
        $estadoCivil = \App\Models\EstadoCivil::factory()->create();
        $response = $this->get("/api/estado_civil/show/$estadoCivil->id", ['Authorization' => "Bearer $token"]);
        $response->assertStatus(200);
    }

    public function testCreate()
    {
        $token = $this->getToken();
        $estadoCivil = \App\Models\EstadoCivil::factory()->make();

        $response = $this->post("/api/estado_civil/create/", [
            'nome' => $estadoCivil->nome,
        ], ['Authorization' => "Bearer $token"]);

        $response->assertStatus(201);
    }

    public function testUpdate()
    {
        $token = $this->getToken();
        $estadoCivil = \App\Models\EstadoCivil::factory()->create();

        $response = $this->put("/api/estado_civil/update/$estadoCivil->id", [
            'nome' => $estadoCivil->nome,
        ], ['Authorization' => "Bearer $token"]);

        $response->assertStatus(200);
    }

    public function testDelete()
    {
        $token = $this->getToken();
        $estadoCivil = \App\Models\EstadoCivil::factory()->create();
        $response = $this->json('delete', 'api/estado_civil/destroy/' . $estadoCivil->id, [], ['Authorization' => "Bearer $token"]);
        $response->assertStatus(200);
    }
}
