<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infracao extends Model
{
    // Determina o nome da tabela 
    protected $table = 'infracoes';

    // os campos created_at e updated_at não sejam obrigatórios
    public $timestamps = false;

    // Por questões de segurança, temos que informar os fillables (atributos do nosso BD)
    protected $fillable = ['tipo', 'tipo_produto', 'empresa', 'marca', 'estado'];
}


// M -> Criou e salvou no banco
// V -> Normalizou através do layout padrão.
// C -> store() <- salvamento de informações no banco