@extends('layout')

@section('cabecalho', 'Listagem de Infrações')

@section('conteudo')

    <a href="/infracoes/criar" class="btn btn-dark mb-2">
        Adicionar
    </a>

    <table class="table table-dark">

        <thead>
            <tr>
                <th>Id</th>
                <th>Tipo</th>
                <th>Tipo do Produto</th>
                <th>Empresa</th>
                <th>Marca</th>
                <th>Estado</th>
                <th>Data da Criação</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($infracoes as $infracao)
                <tr>
                    <td>{{ $infracao['id'] }}</td>
                    <td>{{ $infracao['tipo'] }}</td>
                    <td>{{ $infracao['tipo_produto'] }}</td>
                    <td>{{ $infracao['empresa'] }}</td>
                    <td>{{ $infracao['marca'] }}</td>
                    <td>{{ $infracao['estado'] }}</td>
                    <td>{{ $infracao['created_at'] }}</td>
                    <td><a href="#">Apagar</a></td>
                </tr>
            @endforeach
        </tbody>

    </table>
    
@endsection