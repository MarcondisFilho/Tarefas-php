# Gerenciador de Tarefas

Este é um aplicativo simples de gerenciamento de tarefas desenvolvido com Laravel.

## Funcionalidades

- Exibir uma lista de tarefas
- Adicionar uma nova tarefa
- Editar uma tarefa existente
- Excluir uma tarefa

## Requisitos

- PHP 7.4 ou superior
- Composer
- Laravel 8.x
- Banco de dados MySQL

## Instalação

- Clone este repositório para o seu ambiente de desenvolvimento local.
    - git clone https://github.com/seu-usuario/gerenciador-de-tarefas.git

- Navegue até o diretório do projeto.
    - cd gerenciador-de-tarefas

- Instale as dependências do Composer. 
    - composer install

- Crie um arquivo de ambiente (.env) a partir do exemplo fornecido:
    - cp .env.example .env

- Configure as informações do banco de dados no arquivo .env.

- Gere uma nova chave de aplicativo:
    - php artisan key:generate

- Execute as migrações do banco de dados para criar a tabela "tasks":
    - php artisan migrate

- Inicie o servidor de desenvolvimento do Laravel:
    - php artisan serve

- Acesse o aplicativo em seu navegador através do URL fornecido pelo servidor de desenvolvimento.

## Contribuição

Se você quiser contribuir para este projeto, sinta-se à vontade para enviar um pull request. Ficarei feliz em revisar e mesclar as alterações.

## Licença

Este projeto está licenciado sob a licença [MIT](https://opensource.org/licenses/MIT).

## Agradecimentos

Este projeto foi desenvolvido com base no tutorial [Adição de autenticação de usuário no Laravel](https://laravel.com/docs/8.x/authentication) e utiliza o framework [Laravel](https://laravel.com/).
















