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
        // Exemplo de ordenação
        // $infracoes = Infracao::query()->orderBy('tipo_produto')->get();
        // $infracoes = Infracao::query()->whereTipo('internet')->get();
        // $infracoes = Infracao::query()->whereTipo('presencial')->get();
        // $infracoes = Infracao::query()->whereEmpresa('danone')->get();
        // $infracoes = Infracao::query()->whereMarca('ninho')->get();

        // Pegar sessão caso tiver, e transportar para minha view
        $mensagem = $request->session()->get('mensagem');

        return view('infracoes.index', [ 
            'infracoes' => $infracoes,
            'mensagem'  => $mensagem,
        ]);
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
        
        // Informar ao usuário sobre o status da sua requsição
        $request->session()->flash(
            'mensagem', "Infração do tipo {$infracao->tipo}, registrada para a empresa {$infracao->empresa} foi criada com sucesso!"
        );

        return redirect()->route('listar_infracoes');
    }

    public function destroy(Request $request)
    {
        // Pedir para o model apagar de acrdo com o ID vindo na request
        // Infracao::destroy($request->id);
        Infracao::where('id', $request->id)->delete();

        $request->session()->flash(
            'mensagem', "Infração com ID {$request->id} foi removida com sucesso!"
        );

        return redirect()->route('listar_infracoes');
    }
}
