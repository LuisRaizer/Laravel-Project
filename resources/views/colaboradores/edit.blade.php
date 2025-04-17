<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Colaborador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5 d-flex justify-content-center">
        <div class="card shadow p-4 w-100" style="max-width: 600px;">
            <h2 class="mb-4 text-center">Editar Colaborador</h2>

            <form action="{{ route('colaboradores.update', $colaborador->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nome completo:</label>
                    <input type="text" name="nome_completo" value="{{ $colaborador->nome_completo }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Setor:</label>
                    <select name="setor" class="form-select" required>
                        <option value="Tecnologia" {{ $colaborador->setor == 'Tecnologia' ? 'selected' : '' }}>Tecnologia</option>
                        <option value="Administrativo" {{ $colaborador->setor == 'Administrativo' ? 'selected' : '' }}>Administrativo</option>
                        <option value="Projeto" {{ $colaborador->setor == 'Projeto' ? 'selected' : '' }}>Projeto</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Cidade:</label>
                    <input type="text" name="cidade" value="{{ $colaborador->cidade }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Data de Check-in:</label>
                    <input type="date" name="checkin" value="{{ $colaborador->checkin }}" class="form-control" required>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                    <a href="{{ route('colaboradores.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
