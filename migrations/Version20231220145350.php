<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231220145350 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE habitation (id INT AUTO_INCREMENT NOT NULL, adresse VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, type_habitation VARCHAR(255) NOT NULL, surface_habitable INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE habitant ADD habitation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE habitant ADD CONSTRAINT FK_9BADFD8B12708B4D FOREIGN KEY (habitation_id) REFERENCES habitation (id)');
        $this->addSql('CREATE INDEX IDX_9BADFD8B12708B4D ON habitant (habitation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE habitant DROP FOREIGN KEY FK_9BADFD8B12708B4D');
        $this->addSql('DROP TABLE habitation');
        $this->addSql('DROP INDEX IDX_9BADFD8B12708B4D ON habitant');
        $this->addSql('ALTER TABLE habitant DROP habitation_id');
    }
}
