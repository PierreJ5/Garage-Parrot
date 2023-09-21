<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230921120242 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis_attente DROP titre, DROP note');
        $this->addSql('ALTER TABLE avis_utilisateur DROP titre, DROP note');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis_attente ADD titre VARCHAR(255) NOT NULL, ADD note INT NOT NULL');
        $this->addSql('ALTER TABLE avis_utilisateur ADD titre VARCHAR(255) NOT NULL, ADD note INT NOT NULL');
    }
}
