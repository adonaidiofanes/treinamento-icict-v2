<?php

namespace App\Http\Controllers;

use App\Infracao;
use Illuminate\Http\Request;

class InfracoesController extends Controller
{
    public function index(Request $request)
    {
        // Buscar todas as infrações inseridas na tabela infracoes em nosso banco de dados
        $infracoes = Infracao::all();

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
        $infracao = Infracao::create([
            'tipo'          => $request->tipo,
            'tipo_produto'  => $request->tipo_produto,
            'empresa'       => $request->empresa,
            'marca'         => $request->marca,
            'estado'        => $request->estado,
        ]);

        // echo "Infração do tipo {$infracao->tipo}, registrada para a empresa {$infracao->empresa} foi criada com sucesso!";
        
        return redirect('/infracoes');
    }
}
