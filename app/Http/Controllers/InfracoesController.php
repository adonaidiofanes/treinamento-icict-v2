<?php

namespace App\Http\Controllers;

use App\Infracao;
use Illuminate\Http\Request;

class InfracoesController extends Controller
{
    public function index(Request $request)
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

        return view('infracoes.index', [ 'infracoes' => $infracoes ]);

        // HTML para retorno no browser
        // $html = "<ul>";

        // // Percorrendo todos os objetos e adicionando ao retorno de HTML
        // foreach ($infracoes as $infracao) {
        //     $html .= "<li>" . $infracao['tipo'] . "</li>";
        // }

        // $html .= "</ul>";
        // return $html;
    }

    public function create()
    {
        return view('infracoes.create');
    }

    public function store(Request $request)
    {
        // Criar objeto infracao
        $infracao = new Infracao();
        $infracao->tipo = $request->tipo;
        $infracao->tipo_produto = $request->tipo_produto;
        $infracao->empresa = $request->empresa;
        $infracao->marca = $request->marca;
        $infracao->estado = $request->estado;

        // Salvar no banco e verificar se ocorreu certo
        var_dump($infracao->save());
    }
}
