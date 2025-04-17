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
                {{ $colaborador->nome_completo }} - {{ $colaborador->setor }} - {{ $colaborador->cidade }} - {{ $colaborador->checkin }}
                <a href="{{ route('colaboradores.delete', $colaborador->id) }}" style="color: red; margin-left: 10px;">Excluir</a>
            </li>
        @endforeach

    @if ($colaboradores->isEmpty())
        <p>Nenhum colaborador cadastrado.</p>
    @endif
    </ul>
</body>
</html>