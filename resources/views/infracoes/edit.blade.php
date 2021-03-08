@extends('layout')

@section('cabecalho')
    Editar infração #{{$infracao->id}}
@endsection

@section('conteudo')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('atualizar_infracao', $infracao->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="tipo">Tipo</label>
        <select name="tipo" id="tipo" class="form-control">
            <option value="">-- Selecione --</option>

            <option value="Internet"
            {{ old('tipo', $infracao->tipo ?? null) == 'Internet' ? 'selected' : "" }}
            >Internet</option>

            <option value="Presencial"
            {{ old('tipo', $infracao->tipo ?? null) == 'Presencial' ? 'selected' : "" }}
            >Presencial</option>

        </select>
    </div>

    <div class="form-group">
        <label for="tipo_produto">Tipo de Produto</label>
        <select name="tipo_produto" id="tipo_produto" class="form-control">
            <option value="">-- Selecione --</option>

            <option value="formula_infantil"
            {{ old('tipo_produto', $infracao->tipo_produto ?? null) == 'formula_infantil' ? 'selected' : "" }}
            >Fórmula Infantil</option>

            <option value="leites"
            {{ old('tipo_produto', $infracao->tipo_produto ?? null) == 'leites' ? 'selected' : "" }}
            >Leites</option>

            <option value="composto_lacteo"
            {{ old('tipo_produto', $infracao->tipo_produto ?? null) == 'composto_lacteo' ? 'selected' : "" }}
            >Composto Lácteo</option>
        </select>
    </div>

    <div class="form-group">
        <label for="empresa">Empresa</label>
        <input type="text" name="empresa" id="empresa" class="form-control" 
        value="{{ old('empresa', $infracao->empresa) ?? '' }}"
        >
        <small>(ex: Nestlé, Danone)</small>
    </div>

    <div class="form-group">
        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca" class="form-control" 
        value="{{ old('marca', $infracao->marca) ?? '' }}"
        >
        <small>(ex: NAN, Ninho)</small>
    </div>

    <?php $estados = array( 'AC'=>'Acre', 'AL'=>'Alagoas', 'AP'=>'Amapá', 'AM'=>'Amazonas', 'BA'=>'Bahia', 'CE'=>'Ceará', 'DF'=>'Distrito Federal', 'ES'=>'Espírito Santo', 'GO'=>'Goiás', 'MA'=>'Maranhão', 'MT'=>'Mato Grosso', 'MS'=>'Mato Grosso do Sul', 'MG'=>'Minas Gerais', 'PA'=>'Pará', 'PB'=>'Paraíba', 'PR'=>'Paraná', 'PE'=>'Pernambuco', 'PI'=>'Piauí', 'RJ'=>'Rio de Janeiro', 'RN'=>'Rio Grande do Norte', 'RS'=>'Rio Grande do Sul', 'RO'=>'Rondônia', 'RR'=>'Roraima', 'SC'=>'Santa Catarina', 'SP'=>'São Paulo', 'SE'=>'Sergipe', 'TO'=>'Tocantins' ); ?>

    <div class="form-group">
        <label for="estado">Estado</label>
        <select name="estado" id="estado" class="form-control">
            <option value="">-- Selecione --</option>
            @foreach ($estados as $key => $value)
                <option value="{{ $key }}"
                {{ old('estado', $infracao->estado ?? null) == $key ? 'selected' : "" }}
                >{{ $value }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">
        Salvar
    </button>

</form>
            
@endsection