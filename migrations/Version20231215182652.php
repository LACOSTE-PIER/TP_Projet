<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231215182652 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE habitant ADD nom_famille VARCHAR(255) NOT NULL, ADD prenom_individu VARCHAR(255) NOT NULL, ADD genre_identifie VARCHAR(255) NOT NULL, DROP nom, DROP prenom, DROP genre, CHANGE date_naissance date_de_naissance DATE NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE habitant ADD nom VARCHAR(255) NOT NULL, ADD prenom VARCHAR(255) NOT NULL, ADD genre VARCHAR(255) NOT NULL, DROP nom_famille, DROP prenom_individu, DROP genre_identifie, CHANGE date_de_naissance date_naissance DATE NOT NULL');
    }
}
