<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacina extends Model
{
    // massassignment: Dizer quais os atributos confiáveis
    protected $fillable = ['nome', 'instituicao_id'];

    // Ligação da tabela vacina -> instituicao
    public function instituicao()
    {
        return $this->belongsTo(Instituicao::class);
    }
}
