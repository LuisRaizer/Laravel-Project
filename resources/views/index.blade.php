<!DOCTYPE html>
<html>
<head>
    <title>Lista de Colaboradores</title>
</head>
<body>
    <h1>Colaboradores</h1>
    <a href="{{ route('colaboradores.create') }}">Novo Colaborador</a>
    <ul>
        @foreach ($colaboradores as $colaborador)
        <li>
            {{ $colaborador->nome_completo }} - {{ $colaborador->setor }}
            <a href="{{ route('colaboradores.edit', $colaborador->id) }}" style="color: blue;">Editar</a>
            <a href="{{ route('colaboradores.delete', $colaborador->id) }}" style="color: red;">Excluir</a>
        </li>
        @endforeach

    @if ($colaboradores->isEmpty())
        <p>Nenhum colaborador cadastrado.</p>
    @endif
    </ul>
</body>
</html>