<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230915035827 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE info_vehicules (id INT AUTO_INCREMENT NOT NULL, id_vehicule_id INT NOT NULL, nb_portes INT NOT NULL, nb_sieges INT NOT NULL, abs TINYINT(1) NOT NULL, roue_motrices INT NOT NULL, dir_assistee TINYINT(1) NOT NULL, esp TINYINT(1) NOT NULL, ab_av TINYINT(1) NOT NULL, ab_ar TINYINT(1) NOT NULL, wifi TINYINT(1) NOT NULL, bluetooth TINYINT(1) NOT NULL, reg_vitesse TINYINT(1) NOT NULL, lim_vitesse TINYINT(1) NOT NULL, correc_traj TINYINT(1) NOT NULL, aide_parking TINYINT(1) NOT NULL, prop_trac VARCHAR(255) NOT NULL, avis_vendeur LONGTEXT DEFAULT NULL, UNIQUE INDEX UNIQ_D55131105258F8E6 (id_vehicule_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicules (id INT AUTO_INCREMENT NOT NULL, marque VARCHAR(255) NOT NULL, modele VARCHAR(255) NOT NULL, chevaux INT NOT NULL, annee DATE NOT NULL, kilometres INT NOT NULL, type_carburant VARCHAR(255) NOT NULL, date_ajout DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE info_vehicules ADD CONSTRAINT FK_D55131105258F8E6 FOREIGN KEY (id_vehicule_id) REFERENCES vehicules (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE info_vehicules DROP FOREIGN KEY FK_D55131105258F8E6');
        $this->addSql('DROP TABLE info_vehicules');
        $this->addSql('DROP TABLE vehicules');
    }
}
