<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220706070825 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE Categorie (id INT AUTO_INCREMENT NOT NULL, nomC VARCHAR(254) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE Produit ADD categorie INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Produit ADD CONSTRAINT FK_E618D5BB497DD634 FOREIGN KEY (categorie) REFERENCES Categorie (id)');
        $this->addSql('CREATE INDEX IDX_E618D5BB497DD634 ON Produit (categorie)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE Produit DROP FOREIGN KEY FK_E618D5BB497DD634');
        $this->addSql('DROP TABLE Categorie');
        $this->addSql('DROP INDEX IDX_E618D5BB497DD634 ON Produit');
        $this->addSql('ALTER TABLE Produit DROP categorie');
    }
}
