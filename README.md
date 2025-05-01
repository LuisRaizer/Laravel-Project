# ![Logo Laravel](https://laravel.com/img/logotype.min.svg)

Bem-vindo ao meu projeto! Este é um sistema desenvolvido em Laravel para gerenciar colaboradores, com funcionalidades como login, cadastro, leitura,  edição e exclusão de registros.

## ✨ Funcionalidades Principais
- Autenticação (email/senha)
- CRUD completo de colaboradores
- Interface limpa com Bootstrap
- Validação de formulários
- Estrutura otimizada

## 🚀 Requisitos para Rodar o Projeto
Antes de começar, certifique-se de que você tem o seguinte instalado no seu ambiente:

- PHP: Versão 8.1 ou superior.
- Composer: Versão 2.0 ou superior para gerenciar as dependências do Laravel.
- Banco de Dados: MySQL, PostgreSQL ou SQLite.
- Servidor Web: Apache, Nginx ou o servidor embutido do Laravel.

## 🚀 Configuração Rápida

### 1. Instalação Inicial
Execute esses comandos no terminal:
```bash
git clone [URL_DO_REPOSITORIO]
cd [CAMINHO_PARA_A_PASTA_DO_PROJETO] (#Laravel-Project)
composer install
cp .env.example .env
php artisan key:generate
```
### 2. Configuração do Banco de Dados
Certifique-se que no arquivo '.env' estão configuradas corretamente as variáveis de ambiente do banco de dados

```.env
DB_CONNECTION=(Ou sqlite, ou pgsql, ou mysql dependendo de qual você usar)
DB_HOST=127.0.0.1
DB_PORT=(Depende de qual Banco de Dados)
DB_DATABASE=(NOME_DO_BANCO)
DB_USERNAME=(NOME_DE_USUÁRIO)
DB_PASSWORD=(SENHA_DO_BANCO)
```

Execute esses comandos no terminal:
```bash
php artisan migrate
```

### 3. Crie um usuário administrativo
Utilize o tinker para criar um usuário para ser feita a autenticação
```bash
php artisan tinker
\App\Models\User::create([
    'email' => 'admin@email.com',
    'password' => bcrypt('123')
]);
exit
```

### 4. Agora inicie o servidor
```bash
php artisan serve
```

## Pronto! Agora acesse a porta exibida e aí está o projeto