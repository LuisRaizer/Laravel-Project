<!DOCTYPE html>
<html>
<head>
    <title>Excluir Colaborador</title>
</head>
<body>
    <h1>Excluir Colaborador</h1>
    <form action="{{ route('colaboradores.destroy', $colaborador->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <p>Tem certeza de que deseja excluir o colaborador <strong>{{ $colaborador->nome_completo }}</strong>?</p>
        <button type="submit">Excluir</button>
    </form>
    <a href="{{ route('colaboradores.index') }}">Cancelar</a>
</body>
</html>