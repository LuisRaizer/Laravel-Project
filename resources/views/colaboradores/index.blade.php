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
            </li>
        @endforeach
    </ul>
</body>
</html>
