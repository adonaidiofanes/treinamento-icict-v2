<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    public function create()
    {
        return view('registro.create');
    }

    public function store(Request $request)
    {

        // Validação do campo CPF
        $request->validate([
            'cpf' => 'required|min:3|numeric'
        ]);

        $dados = $request->except('_token');

        // Criptografia de senha via Hash
        $dados['password'] = Hash::make($dados['password']);

        // Criar usuário
        $usuario = User::create($dados);

        // Autenticar usuário após a criação
        Auth::login($usuario);

        return redirect()->route('listar_infracoes');
    }
}
