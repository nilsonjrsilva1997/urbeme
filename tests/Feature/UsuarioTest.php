<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsuarioTest extends TestCase
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
    
    public function test_update_user()
    {
        $token = $this->getToken();
        $user = \App\Models\User::factory()->make();

        $response = $this->post("/api/dados_pessoais/update/", [
            'data_nascimento' => date('1997-07-12'),
            'estado_civil_id' => \App\Models\EstadoCivil::factory()->create()['id'],
            'cpf' => '056.342.280-77',
            'rg' => 'XXXXXXXXX-X',
            'profissao' => 'TESTE',
            'empresa' => 'EMPRESA XPTO',
            'celular' => '55 (13) 99999-9999',
            'telefone' => '55 (13) 99999-9999',
            'sexo' => 'MASCULINO'
        ], ['Authorization' => "Bearer $token"]);

        $response->assertStatus(200);
    }
}
