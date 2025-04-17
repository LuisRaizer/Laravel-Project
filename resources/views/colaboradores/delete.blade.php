<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Excluir Colaborador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5 d-flex justify-content-center">
        <div class="card shadow p-4 w-100" style="max-width: 500px;">
            <h2 class="mb-4 text-center text-danger">Excluir Colaborador</h2>

            <form action="{{ route('colaboradores.destroy', $colaborador->id) }}" method="POST">
                @method('DELETE')
                @csrf

                <div class="alert alert-warning text-center">
                    Tem certeza de que deseja excluir o colaborador<br>
                    <strong>{{ $colaborador->nome_completo }}</strong>?
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-danger">Excluir</button>
                    <a href="{{ route('colaboradores.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
