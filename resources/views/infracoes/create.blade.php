<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de Infrações</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="jumbotron">
            <h1>Infrações</h1>

            <form action="/infracoes/criar" method="POST">
                @csrf

                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    <select name="tipo" id="tipo" class="form-control">
                        <option value="">-- Selecione --</option>
                        <option value="Internet">Internet</option>
                        <option value="Presencial">Presencial</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="tipo_produto">Tipo</label>
                    <select name="tipo_produto" id="tipo_produto" class="form-control">
                        <option value="">-- Selecione --</option>
                        <option value="formula_infantil">Fórmula Infantil</option>
                        <option value="leites">Leites</option>
                        <option value="composto_lacteo">Composto Lácteo</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="empresa">Empresa</label>
                    <input type="text" name="empresa" id="empresa" class="form-control">
                    <small>(ex: Nestlé, Danone)</small>
                </div>
                
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" name="marca" id="marca" class="form-control">
                    <small>(ex: NAN, Ninho)</small>
                </div>

                <?php $estados = array( 'AC'=>'Acre', 'AL'=>'Alagoas', 'AP'=>'Amapá', 'AM'=>'Amazonas', 'BA'=>'Bahia', 'CE'=>'Ceará', 'DF'=>'Distrito Federal', 'ES'=>'Espírito Santo', 'GO'=>'Goiás', 'MA'=>'Maranhão', 'MT'=>'Mato Grosso', 'MS'=>'Mato Grosso do Sul', 'MG'=>'Minas Gerais', 'PA'=>'Pará', 'PB'=>'Paraíba', 'PR'=>'Paraná', 'PE'=>'Pernambuco', 'PI'=>'Piauí', 'RJ'=>'Rio de Janeiro', 'RN'=>'Rio Grande do Norte', 'RS'=>'Rio Grande do Sul', 'RO'=>'Rondônia', 'RR'=>'Roraima', 'SC'=>'Santa Catarina', 'SP'=>'São Paulo', 'SE'=>'Sergipe', 'TO'=>'Tocantins' ); ?>

                <div class="form-group">
                    <label for="estado">Estado</label>
                    <select name="estado" id="estado" class="form-control">
                        <option value="">-- Selecione --</option>
                        @foreach ($estados as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">
                    Adicionar
                </button>

            </form>
            
        </div>
    </div>

</body>
</html>