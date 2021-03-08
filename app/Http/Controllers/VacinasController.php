<?php

namespace App\Http\Controllers;

use App\Vacina;
use Illuminate\Http\Request;

class VacinasController extends Controller
{
    // Listagem de todas as vacinas
    public function index(Request $request)
    {
        $vacinas = Vacina::query()->orderBy('id')->get();
        dd($vacinas[1]->instituicao->orgao);
    }
}