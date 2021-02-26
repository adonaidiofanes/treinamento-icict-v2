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


// M -> Criou e salvou no banco
// V -> Normalizou através do layout padrão.
// C -> store() <- salvamento de informações no banco