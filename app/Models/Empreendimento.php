<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Empreendimento extends Model
{
    use HasFactory;

    protected $fillable = [
        'plano_fundo',
        'nome_projeto',
        'endereco_id',
        'incorporadora_id',
        'url_video',
        'descricao_projeto',
        'rentabilidade_anual_min',
        'rentabilidade_anual_max',
        'rentabilidade_minima_cdi',
        'vencimento_titulo',
        'tempo_projeto',
        'informacoes_empreendimento',
        'informacoes_oferta',
        'informacoes_prestacao_contas',
        'alerta_riscos',
        'caracteristica_oferta_tributacao_aplicavel',
        'estudo_viabilidade_economica',
        'outras_informacoes',
        'pacote_documentos_juridicos',
        'slug',
        'valor_total_capitacao',
        'final_capitacao',
        'andamento_obras',
        'unidades_vendidas',
    ];

    protected $table = 'empreendimentos';

    public function endereco()
    {
        return $this->belongsTo(EnderecoIncorporadora::class, 'endereco_id', 'id');
    }

    public function fotos()
    {
        return $this->hasMany(FotosEmpreendimento::class);
    }

    public function investimento()
    {
        return $this->hasMany(Investimento::class);
    }

    public function calcularPorcentagem($empreendimento_id)
    {
        $valorInvestimentos = Investimento::where(['empreendimento_id' => $empreendimento_id])->sum('valor');
        $valorCapitacao = Empreendimento::where(['id' => $empreendimento_id])->select('valor_total_capitacao')->first()['valor_total_capitacao'];

        return ($valorInvestimentos * 100) / $valorCapitacao;
    }

    public function incorporadora()
    {
        return $this->belongsTo(Incorporadora::class, 'incorporadora_id', 'id');
    }
}
