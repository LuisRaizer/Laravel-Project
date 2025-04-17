<!DOCTYPE html>
<html>
<head>
    <title>Editar Colaborador</title>
</head>
<body>
    <h1>Editar Colaborador</h1>
    <form action="{{ route('colaboradores.update', $colaborador->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Nome completo:</label>
        <input type="text" name="nome_completo" value="{{ $colaborador->nome_completo }}" required><br><br>

        <label>Setor:</label>
        <select name="setor" required>
            <option value="Tecnologia" {{ $colaborador->setor == 'Tecnologia' ? 'selected' : '' }}>Tecnologia</option>
            <option value="Administrativo" {{ $colaborador->setor == 'Administrativo' ? 'selected' : '' }}>Administrativo</option>
        </select><br><br>

        <label>Cidade:</label>
        <input type="text" name="cidade" value="{{ $colaborador->cidade }}" required><br><br>

        <label>Data de Check-in:</label>
        <input type="date" name="checkin" value="{{ $colaborador->checkin }}" required><br><br>

        <button type="submit">Atualizar</button>
        <a href="{{ route('colaboradores.index') }}">Cancelar</a>
    </form>
</body>
</html>