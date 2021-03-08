@extends('layout')

@section('cabecalho')
    Registrar-se
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

    <form method="POST">
        @csrf

        <div class="form-group">
            <label for="name" class="required">Nome</label>
            <input type="text" name="name" id="name" required class="form-control">
        </div>

        <div class="form-group">
            <label for="email" class="required">Email</label>
            <input type="email" name="email" id="email" required class="form-control">
        </div>

        <div class="form-group">
            <label for="cpf" class="required">CPF</label>
            <input type="number" name="cpf" id="cpf" required class="form-control">
        </div>

        <div class="form-group">
            <label for="password" class="required">Senha</label>
            <input type="password" name="password" id="password" required class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-3">
            Registrar-se
        </button>

    </form>

@endsection