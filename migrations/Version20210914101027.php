<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210914101027 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activite (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE activite_salle (activite_id INT NOT NULL, salle_id INT NOT NULL, INDEX IDX_F0EBBE559B0F88B1 (activite_id), INDEX IDX_F0EBBE55DC304035 (salle_id), PRIMARY KEY(activite_id, salle_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article_web (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article_web_salle (article_web_id INT NOT NULL, salle_id INT NOT NULL, INDEX IDX_59B12AE694DFD0CD (article_web_id), INDEX IDX_59B12AE6DC304035 (salle_id), PRIMARY KEY(article_web_id, salle_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE coach (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE concept (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE concept_salle (concept_id INT NOT NULL, salle_id INT NOT NULL, INDEX IDX_9179306F909284E (concept_id), INDEX IDX_9179306DC304035 (salle_id), PRIMARY KEY(concept_id, salle_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contrat_abonnement (id INT AUTO_INCREMENT NOT NULL, salles_id INT DEFAULT NULL, type_abonnnements_id INT DEFAULT NULL, INDEX IDX_88249DD0B11E4946 (salles_id), INDEX IDX_88249DD0C94F522A (type_abonnnements_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contrat_abonnement_coach (contrat_abonnement_id INT NOT NULL, coach_id INT NOT NULL, INDEX IDX_4EBF0C8F1324E00E (contrat_abonnement_id), INDEX IDX_4EBF0C8F3C105691 (coach_id), PRIMARY KEY(contrat_abonnement_id, coach_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contrat_abonnement_option_abonnement (contrat_abonnement_id INT NOT NULL, option_abonnement_id INT NOT NULL, INDEX IDX_D3F8F6D31324E00E (contrat_abonnement_id), INDEX IDX_D3F8F6D363C9E0CB (option_abonnement_id), PRIMARY KEY(contrat_abonnement_id, option_abonnement_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE option_abonnement (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE salle (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE salle_coach (salle_id INT NOT NULL, coach_id INT NOT NULL, INDEX IDX_D25C6EA5DC304035 (salle_id), INDEX IDX_D25C6EA53C105691 (coach_id), PRIMARY KEY(salle_id, coach_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_abonnement (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE activite_salle ADD CONSTRAINT FK_F0EBBE559B0F88B1 FOREIGN KEY (activite_id) REFERENCES activite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE activite_salle ADD CONSTRAINT FK_F0EBBE55DC304035 FOREIGN KEY (salle_id) REFERENCES salle (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article_web_salle ADD CONSTRAINT FK_59B12AE694DFD0CD FOREIGN KEY (article_web_id) REFERENCES article_web (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article_web_salle ADD CONSTRAINT FK_59B12AE6DC304035 FOREIGN KEY (salle_id) REFERENCES salle (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE concept_salle ADD CONSTRAINT FK_9179306F909284E FOREIGN KEY (concept_id) REFERENCES concept (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE concept_salle ADD CONSTRAINT FK_9179306DC304035 FOREIGN KEY (salle_id) REFERENCES salle (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE contrat_abonnement ADD CONSTRAINT FK_88249DD0B11E4946 FOREIGN KEY (salles_id) REFERENCES salle (id)');
        $this->addSql('ALTER TABLE contrat_abonnement ADD CONSTRAINT FK_88249DD0C94F522A FOREIGN KEY (type_abonnnements_id) REFERENCES type_abonnement (id)');
        $this->addSql('ALTER TABLE contrat_abonnement_coach ADD CONSTRAINT FK_4EBF0C8F1324E00E FOREIGN KEY (contrat_abonnement_id) REFERENCES contrat_abonnement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE contrat_abonnement_coach ADD CONSTRAINT FK_4EBF0C8F3C105691 FOREIGN KEY (coach_id) REFERENCES coach (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE contrat_abonnement_option_abonnement ADD CONSTRAINT FK_D3F8F6D31324E00E FOREIGN KEY (contrat_abonnement_id) REFERENCES contrat_abonnement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE contrat_abonnement_option_abonnement ADD CONSTRAINT FK_D3F8F6D363C9E0CB FOREIGN KEY (option_abonnement_id) REFERENCES option_abonnement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE salle_coach ADD CONSTRAINT FK_D25C6EA5DC304035 FOREIGN KEY (salle_id) REFERENCES salle (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE salle_coach ADD CONSTRAINT FK_D25C6EA53C105691 FOREIGN KEY (coach_id) REFERENCES coach (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activite_salle DROP FOREIGN KEY FK_F0EBBE559B0F88B1');
        $this->addSql('ALTER TABLE article_web_salle DROP FOREIGN KEY FK_59B12AE694DFD0CD');
        $this->addSql('ALTER TABLE contrat_abonnement_coach DROP FOREIGN KEY FK_4EBF0C8F3C105691');
        $this->addSql('ALTER TABLE salle_coach DROP FOREIGN KEY FK_D25C6EA53C105691');
        $this->addSql('ALTER TABLE concept_salle DROP FOREIGN KEY FK_9179306F909284E');
        $this->addSql('ALTER TABLE contrat_abonnement_coach DROP FOREIGN KEY FK_4EBF0C8F1324E00E');
        $this->addSql('ALTER TABLE contrat_abonnement_option_abonnement DROP FOREIGN KEY FK_D3F8F6D31324E00E');
        $this->addSql('ALTER TABLE contrat_abonnement_option_abonnement DROP FOREIGN KEY FK_D3F8F6D363C9E0CB');
        $this->addSql('ALTER TABLE activite_salle DROP FOREIGN KEY FK_F0EBBE55DC304035');
        $this->addSql('ALTER TABLE article_web_salle DROP FOREIGN KEY FK_59B12AE6DC304035');
        $this->addSql('ALTER TABLE concept_salle DROP FOREIGN KEY FK_9179306DC304035');
        $this->addSql('ALTER TABLE contrat_abonnement DROP FOREIGN KEY FK_88249DD0B11E4946');
        $this->addSql('ALTER TABLE salle_coach DROP FOREIGN KEY FK_D25C6EA5DC304035');
        $this->addSql('ALTER TABLE contrat_abonnement DROP FOREIGN KEY FK_88249DD0C94F522A');
        $this->addSql('DROP TABLE activite');
        $this->addSql('DROP TABLE activite_salle');
        $this->addSql('DROP TABLE article_web');
        $this->addSql('DROP TABLE article_web_salle');
        $this->addSql('DROP TABLE coach');
        $this->addSql('DROP TABLE concept');
        $this->addSql('DROP TABLE concept_salle');
        $this->addSql('DROP TABLE contrat_abonnement');
        $this->addSql('DROP TABLE contrat_abonnement_coach');
        $this->addSql('DROP TABLE contrat_abonnement_option_abonnement');
        $this->addSql('DROP TABLE option_abonnement');
        $this->addSql('DROP TABLE salle');
        $this->addSql('DROP TABLE salle_coach');
        $this->addSql('DROP TABLE type_abonnement');
        $this->addSql('DROP TABLE `user`');
    }
}
