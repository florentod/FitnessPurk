<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210915072239 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activite ADD nom_activite VARCHAR(255) NOT NULL, ADD article_activite VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE article_web ADD nom_article VARCHAR(255) NOT NULL, ADD theme VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE coach ADD nom_coach VARCHAR(255) NOT NULL, ADD prenom_coach VARCHAR(255) NOT NULL, ADD club_coach VARCHAR(255) NOT NULL, ADD photo_coach VARCHAR(255) DEFAULT NULL, ADD tel_coach INT NOT NULL, ADD discipline VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE concept ADD nom_concept VARCHAR(255) NOT NULL, ADD article VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE salle ADD nom_salle VARCHAR(255) NOT NULL, ADD adresse VARCHAR(255) NOT NULL, ADD cp INT NOT NULL, ADD ville VARCHAR(255) NOT NULL, ADD tel INT NOT NULL, ADD email VARCHAR(255) DEFAULT NULL, ADD horaires VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activite DROP nom_activite, DROP article_activite');
        $this->addSql('ALTER TABLE article_web DROP nom_article, DROP theme');
        $this->addSql('ALTER TABLE coach DROP nom_coach, DROP prenom_coach, DROP club_coach, DROP photo_coach, DROP tel_coach, DROP discipline');
        $this->addSql('ALTER TABLE concept DROP nom_concept, DROP article');
        $this->addSql('ALTER TABLE salle DROP nom_salle, DROP adresse, DROP cp, DROP ville, DROP tel, DROP email, DROP horaires');
    }
}
