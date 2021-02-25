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
    public function dados_bancarios_update_sem_dados_bancarios_cadastrados()
    {
        $user = \App\Models\User::factory()->create();

        $user->password = bcrypt('1234');

        $user->save();

        $response = $this->post('/api/login', [
            'email' => $user->email,
            'password' => '1234'
        ], []);
        
        $token = $response['access_token'];

        $response = $this->put("/api/dados_bancarios/update/1", [
            'conta' => '123',
        ], ['Authorization' => "Bearer $token"]);

        $response->assertStatus(422);
    }

    /** @test */
    public function alterar_dados_bancarios_outro_usuario()
    {
        $user = \App\Models\User::factory()->create();

        $user->password = bcrypt('1234');

        $user->save();

        $response = $this->post('/api/login', [
            'email' => $user->email,
            'password' => '1234'
        ], []);

        $dadosBancarios = \App\Models\DadoBancario::factory()->create();
        
        $token = $response['access_token'];

        $response = $this->put("/api/dados_bancarios/update/$dadosBancarios->id", [
            'conta' => '123',
        ], ['Authorization' => "Bearer $token"]);

        $response->assertStatus(422);
    }

        /** @test */
        public function update_do_usuario_logado()
        {
            $dadosBancarios = \App\Models\DadoBancario::factory()->create();

            $user = \App\Models\User::find($dadosBancarios->user_id);
    
            $user->password = bcrypt('1234');
    
            $user->save();
    
            $response = $this->post('/api/login', [
                'email' => $user->email,
                'password' => '1234'
            ], []);
            
            $token = $response['access_token'];
    
            $response = $this->put("/api/dados_bancarios/update/$dadosBancarios->id", [
                'conta' => '1234',
            ], ['Authorization' => "Bearer $token"]);
    
            $response->assertStatus(200);
        }
}
