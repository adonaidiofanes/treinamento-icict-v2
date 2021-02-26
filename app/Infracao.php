<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infracao extends Model
{
    // Determina o nome da tabela 
    protected $table = 'infracoes';

    // os campos created_at e updated_at não sejam obrigatórios
    public $timestamps = false;
}
