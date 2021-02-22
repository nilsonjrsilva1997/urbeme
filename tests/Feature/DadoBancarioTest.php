<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DadoBancarioTest extends TestCase
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

    /** @test **/
    public function existem_dados_bancarios()
    {
        $dadosBancarios = \App\Models\DadoBancario::factory()->create();

        $count = \App\Models\User::where(['id' => $dadosBancarios->user_id])->first()->dados_bancarios->count();
        $dadoBancarioExists = ($count > 0);
        $this->assertTrue($dadoBancarioExists);
    }

    /** @test */
    public function nao_existem_dados_bancarios()
    {
        $user = \App\Models\User::factory()->create();
        $count = $user->dados_bancarios->count();
        $dadoBancarioExists = ($count > 0);
        $this->assertFalse($dadoBancarioExists);
    }

    /** @test */
    public function dados_bancarios_update()
    {
        
    }

    // public function testIndex()
    // {
    //     $token = $this->getToken();
    //     $response = $this->get('/api/dados_bancarios', ['Authorization' => "Bearer $token"]);
    //     $response->assertStatus(200);
    // }

    // public function testShow()
    // {
    //     $token = $this->getToken();
    //     $dadosBancarios = \App\Models\DadoBancario::factory()->create();
    //     $response = $this->get("/api/dados_bancarios/show/$dadosBancarios->id", ['Authorization' => "Bearer $token"]);
    //     $response->assertStatus(200);
    // }

    // public function testCreate()
    // {
    //     $token = $this->getToken();

    //     $dadosBancarios = \App\Models\DadoBancario::factory()->make();

    //     $response = $this->post("/api/dados_bancarios/create/", [
    //         'agencia' => $dadosBancarios->agencia,
    //         'conta' => $dadosBancarios->conta,
    //         'user_id' => $dadosBancarios->user_id,
    //         'banco_id' => $dadosBancarios->banco_id,
    //     ], ['Authorization' => "Bearer $token"]);

    //     $response->assertStatus(201);
    // }

    // public function testUpdate()
    // {
    //     $token = $this->getToken();
    //     $dadosBancarios = \App\Models\DadoBancario::factory()->create();

    //     $response = $this->put("/api/dados_bancarios/update/$dadosBancarios->id", [
    //         'conta' => $dadosBancarios->conta,
    //     ], ['Authorization' => "Bearer $token"]);

    //     $response->assertStatus(200);
    // }

    // public function testDelete()
    // {
    //     $token = $this->getToken();
    //     $dadosBancarios = \App\Models\DadoBancario::factory()->create();
    //     $response = $this->json('delete', 'api/endereco_incorporadora/destroy/' . $dadosBancarios->id, [], ['Authorization' => "Bearer $token"]);
    //     $response->assertStatus(200);
    // }
}
