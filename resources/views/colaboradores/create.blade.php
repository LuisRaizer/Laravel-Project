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

        <label>Cidade:</label>
        <select name="cidade" required>
            <option value="São Paulo">São Paulo</option>
            <option value="Rio de Janeiro">Rio de Janeiro</option>
            <option value="Belo Horizonte">Belo Horizonte</option>
            <option value="Brasília">Brasília</option>
            <option value="Salvador">Salvador</option>
            <!-- Pode adicionar mais capitais aqui -->
        </select><br><br>

        <label>Data de Check-in:</label>
        <input type="date" name="checkin" required><br><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
