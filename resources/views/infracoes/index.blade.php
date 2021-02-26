@extends('layout')

@section('cabecalho', 'Listagem de Infrações')

@section('conteudo')

    <a href="/infracoes/criar" class="btn btn-dark mb-2">
        Adicionar
    </a>

    <ul class="list-group">
        @foreach ($infracoes as $infracao)
            <li class="list-group-item">
                {{ $infracao['tipo'] }}
            </li>
        @endforeach
    </ul>
    
@endsection