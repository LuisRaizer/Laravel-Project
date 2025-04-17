<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Colaboradores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Colaboradores</h1>
            <a href="{{ route('colaboradores.create') }}" class="btn btn-success">+ Novo Colaborador</a>
        </div>

        @if ($colaboradores->isEmpty())
            <div class="alert alert-info text-center">
                Nenhum colaborador cadastrado.
            </div>
        @else
            <div class="list-group">
                @foreach ($colaboradores as $colaborador)
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <strong>{{ $colaborador->nome_completo }}</strong> - {{ $colaborador->setor }}
                        </div>
                        <div>
                            <a href="{{ route('colaboradores.edit', $colaborador->id) }}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="{{ route('colaboradores.delete', $colaborador->id) }}" class="btn btn-sm btn-danger">Excluir</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="mt-4 text-center">
            <a href="{{ route('logout') }}" class="btn btn-outline-secondary">Sair</a>
        </div>

    </div>

</body>
</html>
