<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Colaborador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5 d-flex justify-content-center">
        <div class="card shadow p-4 w-100" style="max-width: 600px;">
            <h2 class="mb-4 text-center">Cadastrar novo colaborador</h2>

            <form action="{{ route('colaboradores.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nome completo:</label>
                    <input type="text" name="nome_completo" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Setor:</label>
                    <select name="setor" class="form-select" required>
                        <option value="">Selecione o setor</option>
                        <option value="Tecnologia">Tecnologia</option>
                        <option value="Administrativo">Administrativo</option>
                        <option value="Projeto">Projeto</option>
                    </select>
                </div>

                @php
                $capitais = [
                    'Aracaju (SE)', 'Belém (PA)', 'Belo Horizonte (MG)', 'Boa Vista (RR)',
                    'Brasília (DF)', 'Campo Grande (MS)', 'Cuiabá (MT)', 'Curitiba (PR)',
                    'Florianópolis (SC)', 'Fortaleza (CE)','Goiânia (GO)', 'João Pessoa (PB)',
                    'Macapá (AP)', 'Maceió (AL)', 'Manaus (AM)', 'Natal (RN)',
                    'Palmas (TO)', 'Porto Alegre (RS)', 'Porto Velho (RO)', 'Recife (PE)',
                    'Rio Branco (AC)', 'Rio de Janeiro (RJ)', 'Salvador (BA)', 'São Luís (MA)',
                    'São Paulo (SP)', 'Teresina (PI)','Vitória (ES)'
                ];
                @endphp

                <div class="mb-3">
                    <label class="form-label">Cidade:</label>
                    <select name="cidade" class="form-select" required>
                        @foreach ($capitais as $cidade)
                            <option value="{{ $cidade }}">{{ $cidade }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Data de Check-in:</label>
                    <input type="date" name="checkin" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success w-100">Salvar</button>
            </form>
        </div>
    </div>

</body>
</html>
