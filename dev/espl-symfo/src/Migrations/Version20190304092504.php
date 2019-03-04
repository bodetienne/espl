<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190304092504 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE candidat (id INT AUTO_INCREMENT NOT NULL, nom_candidat VARCHAR(50) NOT NULL, prenom_candidat VARCHAR(50) NOT NULL, jour_naissance_candidat INT NOT NULL, mois_naissance_candidat INT NOT NULL, annee_naissance_candidat INT NOT NULL, lieu_naissance_candidat VARCHAR(50) NOT NULL, mail_candidat VARCHAR(255) NOT NULL, fixe_candidat INT NOT NULL, mobile_candidat INT NOT NULL, adresse_candidat VARCHAR(70) NOT NULL, cp_candidat INT NOT NULL, ville_candidat VARCHAR(50) NOT NULL, secu_candidat INT NOT NULL, permis_candidat TINYINT(1) NOT NULL, code_acces_candidat VARCHAR(6) NOT NULL, etat_dossier_candidat VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE candidat');
    }
}
