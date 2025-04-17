<!DOCTYPE html>
<html>
<head>
    <title>Novo Colaborador</title>
</head>
<body>
    <h1>Cadastrar novo colaborador</h1>
    <form action="{{ route('colaboradores.store') }}" method="POST">
        @csrf
        <label>Nome completo:</label>
        <input type="text" name="nome_completo" required><br><br>

        <label>Setor:</label>
        <select name="setor" required>
            <option value="Tecnologia">Tecnologia</option>
            <option value="Administrativo">Administrativo</option>
            <option value="Projeto">Projeto</option>
        </select><br><br>

        @php
    $capitais = [
        'Rio Branco', 'Maceió', 'Macapá', 'Manaus', 'Salvador',
        'Fortaleza', 'Brasília', 'Vitória', 'Goiânia', 'São Luís',
        'Cuiabá', 'Campo Grande', 'Belo Horizonte', 'Belém',
        'João Pessoa', 'Curitiba', 'Recife', 'Teresina',
        'Rio de Janeiro', 'Natal', 'Porto Alegre', 'Porto Velho',
        'Boa Vista', 'Florianópolis', 'São Paulo', 'Aracaju', 'Palmas'
    ];
@endphp
        
        <label>Cidade:</label>
        <select name="cidade" required>
        @foreach ($capitais as $cidade)
        <option value="{{ $cidade }}">{{ $cidade }}</option>
    @endforeach
        </select><br><br>

        <label>Data de Check-in:</label>
        <input type="date" name="checkin" required><br><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
