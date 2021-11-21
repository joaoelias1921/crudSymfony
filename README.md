# crudSymfony

# instalar symphony CLI
https://symfony.com/download

# criar projeto
composer create-project symfony/website-skeleton my_project_name

# comando p/ baixar Twig p/ templates
composer require twig

# comando p/ baixar Doctrine e MakerBundle para integrar bancos de dados
composer require symfony/orm-pack
composer require --dev symfony/maker-bundle

# criar banco de dados MySQL através do Doctrine (após configurar o .env)
php bin/console doctrine:database:create

# executar migrations para criar tabelas no banco MySQL
php bin/console doctrine:migrations:migrate

# comando p/ rodar servidor
symfony server:start

# comando p/ abrir o index direto
symfony open:local