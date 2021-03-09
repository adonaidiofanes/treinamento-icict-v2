@extends('layout')

@section('cabecalho', 'Listagem de Infrações')

@section('conteudo')

    @if (!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

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
                    <td>{{ $infracao->id }}</td>
                    <td>{{ $infracao->tipo }}</td>
                    <td>{{ $infracao->formataTipoProduto() }}</td>
                    <td>{{ $infracao->empresa }}</td>
                    <td>{{ $infracao->marca }}</td>
                    <td>{{ $infracao->estado }}</td>
                    <td>{{ $infracao->created_at }}</td>
                    <td>
                        <div class="d-flex justify-content-center">

                            @can('ler_infracao', $infracao)
                                <a href="{{ route('exibir_infracao', $infracao->id) }}" 
                                class="btn btn-success btn-sm mr-1" title="Exibir infração #{{$infracao->id}}">
                                    <i class="fas fa-eye"></i>
                                </a>
                            @endcan

                            @can('editar_infracao', $infracao)
                                <a href="{{ route('form_editar_infracao', $infracao->id) }}" 
                                class="btn btn-primary btn-sm mr-1">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            @endcan

                            @can('excluir_infracao', $infracao)
                                <form action="/infracoes/{{$infracao->id}}" method="POST" 
                                onsubmit="return confirm('Tem certeza que deseja excluir a infração {{ addslashes($infracao->id) }}?')"
                                >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            @endcan

                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    
@endsection