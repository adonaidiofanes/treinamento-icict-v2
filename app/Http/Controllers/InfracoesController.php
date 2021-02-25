<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfracoesController extends Controller
{
    public function listarInfracoes()
    {
        // Array com uma coleção de infrações
        $infracoes = array(
            [
                'tipo' =>  'Internet',
                'tipo_produto' =>  'Fórmulas Infantis',
                'empresa' =>  'Nestlé',
                'marca' =>  'Ninho',
                'estado' =>  'RJ',
            ],
            [
                'tipo' =>  'Presencial',
                'tipo_produto' =>  'Composto Lácteo',
                'empresa' =>  'Danone',
                'marca' =>  'NAN',
                'estado' =>  'SP',
            ],
        );

        // HTML para retorno no browser
        $html = "<ul>";

        // Percorrendo todos os objetos e adicionando ao retorno de HTML
        foreach ($infracoes as $infracao) {
            $html .= "<li>" . $infracao['tipo'] . "</li>";
        }

        $html .= "</ul>";
        return $html;
    }
}
