<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211121005555 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cliente (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(150) NOT NULL, cpf_cnpj VARCHAR(30) NOT NULL, telefone VARCHAR(14) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produto (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(150) NOT NULL, descricao LONGTEXT DEFAULT NULL, preco_unitario DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE venda (id INT AUTO_INCREMENT NOT NULL, produto_id_id INT NOT NULL, vendedor_id_id INT NOT NULL, cliente_id_id INT NOT NULL, codigo VARCHAR(20) NOT NULL, valor_total DOUBLE PRECISION NOT NULL, qtd_produto INT NOT NULL, INDEX IDX_C525FC04CDBF150D (produto_id_id), INDEX IDX_C525FC04F1670D34 (vendedor_id_id), INDEX IDX_C525FC04ACC9C364 (cliente_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vendedor (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(150) NOT NULL, cpf VARCHAR(14) NOT NULL, salario DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE venda ADD CONSTRAINT FK_C525FC04CDBF150D FOREIGN KEY (produto_id_id) REFERENCES produto (id)');
        $this->addSql('ALTER TABLE venda ADD CONSTRAINT FK_C525FC04F1670D34 FOREIGN KEY (vendedor_id_id) REFERENCES vendedor (id)');
        $this->addSql('ALTER TABLE venda ADD CONSTRAINT FK_C525FC04ACC9C364 FOREIGN KEY (cliente_id_id) REFERENCES cliente (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE venda DROP FOREIGN KEY FK_C525FC04ACC9C364');
        $this->addSql('ALTER TABLE venda DROP FOREIGN KEY FK_C525FC04CDBF150D');
        $this->addSql('ALTER TABLE venda DROP FOREIGN KEY FK_C525FC04F1670D34');
        $this->addSql('DROP TABLE cliente');
        $this->addSql('DROP TABLE produto');
        $this->addSql('DROP TABLE venda');
        $this->addSql('DROP TABLE vendedor');
    }
}
