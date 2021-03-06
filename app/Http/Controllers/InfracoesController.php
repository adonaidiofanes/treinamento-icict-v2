<?php

namespace App\Http\Controllers;

use App\Infracao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\InfracoesFormRequest;

class InfracoesController extends Controller
{

    // Método construtor para verificação de usuário logado
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(Request $request)
    {

        // Método 1
        // if (!Auth::check()) {
        //     echo "Usuário não autenticado";
        //     exit();
        // }

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

    public function store(InfracoesFormRequest $request)
    {

        // Validação: Vamos validar se o campo empresa está preenchido
        // $request->validate([
        //     'empresa' => 'required|min:3'
        // ]);

        $infracao = Infracao::create([
            'tipo'          => $request->tipo,
            'tipo_produto'  => $request->tipo_produto,
            'empresa'       => $request->empresa,
            'marca'         => $request->marca,
            'estado'        => $request->estado,
        ]);
        
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

    public function update(Request $request, $id)
    {
        $infracao = Infracao::findOrFail($id);

        // Informar ao meu controller, que eu quero um controle de acesso
        $this->authorize('editar_infracao', $infracao);

        // validação
        $this->validate($request, [
            'tipo' => 'required',
            'marca' => 'required|min:3',
            'empresa' => 'required|min:3',
        ]);

        $infracao->update($request->all());

        // Imprimir em uma sessão flash
        $request->session()->flash(
            'mensagem', 
            "Infração de id {$request->id} foi atualizada com sucesso!"
        );
        return redirect()->route('listar_infracoes');
    }

    public function edit($id)
    {
        $infracao = Infracao::findOrFail($id);

        // Informar ao meu controller, que eu quero um controle de acesso
        $this->authorize('editar_infracao', $infracao);

        return view('infracoes.edit', [ 'infracao' => $infracao ]);
    }

    public function show($id)
    {
        $infracao = Infracao::findOrFail($id);
        return view('infracoes.show', compact('infracao'));
    }
}
