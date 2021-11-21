# CRUD Symfony
Olá! Este é um CRUD (Create, Read, Update e Delete) bastante simples feito com o framework Symfony!
Abaixo, seguem informações para clonagem e configuração do projeto e suas dependências.

# Pré-requisitos:
Symfony CLI: https://symfony.com/download
Composer ^2;
PHP ^7;
Wamp Server;
MySQL 5.7 (usado neste projeto)

# No terminal (Windows), entre em sua pasta do Wamp (www) e clone o projeto crudSymfony com os seguintes comandos:
cd C:\wamp64\www
git clone https://github.com/joaoelias1921/crudSymfony.git

# O projeto está clonado! Agora, é preciso configurar o acesso ao banco de dados MySQL para que o CRUD funcione:
Abra o arquivo ".env" localizado em "/crudSymfony"

Altere a linha:
    DATABASE_URL="postgresql://symfony:ChangeMe@127.0.0.1:5432/app?serverVersion=13&charset=utf8"
para:
    # DATABASE_URL="postgresql://symfony:ChangeMe@127.0.0.1:5432/app?serverVersion=13&charset=utf8"

Altere a linha:
    # DATABASE_URL="mysql://seuUsuario:suaSenha@127.0.0.1:3306/db_crudsymfony?serverVersion=5.7"
para:
    DATABASE_URL="mysql://seuUsuario:suaSenha@127.0.0.1:3306/db_crudsymfony?serverVersion=5.7"

Altere os campos "seuUsuario", "suaSenha" e "3306" para condizer com os seus dados pessoais de acesso ao servidor do MySQL Workbench!

# comando p/ baixar Doctrine e outras dependências
composer require symfony/orm-pack
composer require --dev symfony/maker-bundle
composer require annotations
composer require twig

# criar banco de dados MySQL através do Doctrine (após configurar o .env)
php bin/console doctrine:database:create

# executar migrations para criar tabelas no banco MySQL
php bin/console doctrine:migrations:migrate

# comando p/ rodar servidor
symfony server:start

# comando p/ abrir o index direto
symfony open:local