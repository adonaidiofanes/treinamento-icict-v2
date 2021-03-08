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

    // geters and setters

    public function formataTipoProduto()
    {
        $tipo = $this->tipo_produto; // resgata o tipo de produto do meu objeto instanciado

        switch ($tipo) {
            case 'formula_infantil':
                return "Fórmula Infantil";
                break;

            case 'leites':
                return "Leites";
                break;

            case 'composto_lacteo':
                return "Composto Lácteo";
                break;
            
            default:
                return $tipo;
                break;
        }
    }

}


// M -> Criou e salvou no banco
// V -> Normalizou através do layout padrão.
// C -> store() <- salvamento de informações no banco