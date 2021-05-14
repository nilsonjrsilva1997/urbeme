<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EnderecoIncorporadora;
use App\Models\FotosEmpreendimento;
use App\Models\Investimento;
use App\Models\Incorporadora;

class Empreendimento extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo_incorporadora', 'plano_fundo', 'nome_projeto', 'endereco_id', 'url_video',
        'descricao_projeto', 'live_incorporadora', 'site_incorporadora', 'rentabilidade_anual', 'rentabilidade_minima',
        'vencimento_titulo', 'informacoes_incorporadora', 'informacoes_empreendimento', 'informacoes_oferta',
        'informacoes_prestacao_contas', 'alerta_riscos', 'caracteristica_oferta_tributacao_aplicavel',
        'estudo_viabilidade_economica', 'outras_informacoes', 'pacote_documentos_juridicos', 'status', 'slug', 'valor_total_capitacao', 'incorporadora_id'
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
        return $this->hasOne(Investimento::class);
    }

    public function incorporadora()
    {
        return $this->hasOne(Incorporadora::class);
    }

    public function calcularPorcentagem($empreendimento_id)
    {
        $valorInvestimentos = \App\Models\Investimento::where(['empreendimento_id' => $empreendimento_id])->sum('valor');
        $valorCapitacao = \App\Models\Empreendimento::where(['id' => $empreendimento_id])->select('valor_total_capitacao')->first()['valor_total_capitacao'];

        return ($valorInvestimentos * 100) / $valorCapitacao;
    }
}
