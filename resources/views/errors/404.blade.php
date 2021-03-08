@extends('layout')

@section('cabecalho')
    Erro 404 - Página não encontrada
@endsection

@section('conteudo')
    <div class="page-wrap d-flex flex-row-align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <span class="display-1 d-block">
                        404
                    </span>
                    <div class="mb-4 lead">
                        Página não encontrada!
                    </div>
                    <a href="/" class="btn btn-link">
                        Voltar para a Home
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection