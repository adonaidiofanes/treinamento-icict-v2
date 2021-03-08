<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AcessoController extends Controller
{
    public function index()
    {
        return view('acesso.index');
    }

    // Método responsável pela entrada no sistema
    public function entrar(Request $request)
    {
        // Pegar apenas o email e senha postados no form de login
        // $request->only(['email', 'senha']);

        // 1. Realizar login do usuário
        // 2. Gravar em uma sessão automaticamente
        // Se o usuário não estiver logado, vamos redirecioná-lo
        if (!Auth::attempt($request->only(['email', 'password'])))
        {
            return redirect()
                ->back()
                ->withErrors('Usuário e/ou senha incorretos');
        }

        return redirect()->route('listar_infracoes');

    }
}
