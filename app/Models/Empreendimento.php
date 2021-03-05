<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EnderecoIncorporadora;
use App\Models\FotosEmpreendimento;

class Empreendimento extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo_incorporadora', 'plano_fundo', 'nome_projeto', 'endereco_id', 'url_video',
        'descricao_projeto', 'live_incorporadora', 'site_incorporadora', 'rentabilidade_anual', 'rentabilidade_minima',
        'vencimento_titulo', 'informacoes_incorporadora', 'informacoes_empreendimento', 'informacoes_oferta',
        'informacoes_prestacao_contas', 'alerta_riscos', 'caracteristica_oferta_tributacao_aplicavel',
        'estudo_viabilidade_economica', 'outras_informacoes', 'pacote_documentos_juridicos', 'status', 'slug'
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
}
