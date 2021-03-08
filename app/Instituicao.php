<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    // Determina o nome da tabela
    protected $table = 'instituicoes';

    // Define os campos protegidos
    protected $fillables = ['orgao'];

    // Ligação de instituição a vacina
    public function vacinas()
    {
        return $this->hasMany(Vacina::class);
    }
}
