@extends('layout')

@section('cabecalho')
    Detalhe da infração #{{$infracao->id}}
@endsection

@section('conteudo')
    @if (!empty($mensagem))
        <div class="alert alert-success">{{$mensagem}}</div>
    @endif

    <table class="table table-striped">
        <tbody>
            <tr>
                <td>Tipo da Infração:</td>
                <td>{{$infracao->tipo}}</td>
            </tr>
            <tr>
                <td>Tipo do Produto:</td>
                <td>{{$infracao->formataTipoProduto()}}</td>
            </tr>
            <tr>
                <td>Empresa:</td>
                <td>{{$infracao->empresa}}</td>
            </tr>
            <tr>
                <td>Marca:</td>
                <td>{{$infracao->marca}}</td>
            </tr>
            <tr>
                <td>Estado:</td>
                <td>{{$infracao->estado}}</td>
            </tr>
        </tbody>
    </table>

    <a href="#" class="btn btn-primary" onclick="window.print()">Imprimir</a>

@endsection