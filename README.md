# Universidade do Contestado | Engenharia de Software
Trabalho realizado para a disciplina de Desenvolvimento Web II

Professor: Emerson Schafhauser

Aluno: João Elias Cândido Reis

# CRUD Symfony
Olá! Este é um CRUD (Create, Read, Update e Delete) bastante simples feito com o framework Symfony!
Abaixo, seguem informações para clonagem e configuração do projeto e suas dependências.

# Pré-requisitos:
Symfony CLI: https://symfony.com/download

Composer ^2;

PHP ^7;

Wamp Server;

MySQL 5.7 (usado neste projeto)

# Instruções de clonagem e configuração
# No terminal (Windows), entre em sua pasta do Wamp (www) e clone o projeto crudSymfony com os seguintes comandos:
    cd C:\wamp64\www

    git clone https://github.com/joaoelias1921/crudSymfony.git

# O projeto está clonado! Agora, é preciso configurar o acesso ao banco de dados MySQL para que o CRUD funcione:
Abra o arquivo ".env" localizado em "/crudSymfony"

Navegue até a linha:

    DATABASE_URL="mysql://seuUsuario:suaSenha@127.0.0.1:3306/db_crudsymfony?serverVersion=5.7"

Altere os campos "seuUsuario", "suaSenha" e "3306" para condizer com os seus dados pessoais de acesso ao servidor do MySQL Workbench!

Exemplo:

    DATABASE_URL="mysql://root:123@127.0.0.1:3306/db_crudsymfony?serverVersion=5.7"

Agora, é preciso criar um novo banco de dados MySQL para o projeto via comando, utilizando o Doctrine, no terminal (o Wamp precisa estar rodando, para que não ocorram erros):

    php bin/console doctrine:database:create

Confira a criação do banco db_crudsymfony em seu Workbench!

# Com o novo schema criado, crie as tabelas executando as migrations já existentes com o seguinte comando:
    php bin/console doctrine:migrations:migrate

# Pronto! Seu banco está criado e o projeto está pronto para ser utilizado!
Para iniciar o servidor, execute o seguinte comando no terminal:

    symfony server:start

Utilize Ctrl + C para parar o servidor!

Acesse a homepage digitando localhost:8000 na barra de pesquisa do seu navegador. Se tudo correu bem, o CRUD já está 100% funcional.



# Comandos úteis utilizados na criação do CRUD
    composer require symfony/orm-pack

    composer require --dev symfony/maker-bundle

    composer require annotations

    composer require twig

    composer require form validator


    php bin/console make:controller

    php bin/console make:entity

    php bin/console make:form