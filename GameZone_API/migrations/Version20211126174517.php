<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211126174517 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie_produit (categorie_id INT NOT NULL, produit_id INT NOT NULL, INDEX IDX_76264285BCF5E72D (categorie_id), INDEX IDX_76264285F347EFB (produit_id), PRIMARY KEY(categorie_id, produit_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, adress_facturation VARCHAR(255) NOT NULL, adresse_livraison VARCHAR(255) NOT NULL, date_commande DATE NOT NULL, statut VARCHAR(255) NOT NULL, INDEX IDX_6EEAA67DA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE liste (id INT AUTO_INCREMENT NOT NULL, produit_id INT NOT NULL, commande_id INT NOT NULL, quantité INT NOT NULL, INDEX IDX_FCF22AF4F347EFB (produit_id), INDEX IDX_FCF22AF482EA2E54 (commande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medias (id INT AUTO_INCREMENT NOT NULL, produit_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL, lien VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_12D2AF81F347EFB (produit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, description LONGTEXT NOT NULL, type VARCHAR(255) NOT NULL, stock INT NOT NULL, date_sortie DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE categorie_produit ADD CONSTRAINT FK_76264285BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categorie_produit ADD CONSTRAINT FK_76264285F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE liste ADD CONSTRAINT FK_FCF22AF4F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE liste ADD CONSTRAINT FK_FCF22AF482EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE medias ADD CONSTRAINT FK_12D2AF81F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie_produit DROP FOREIGN KEY FK_76264285BCF5E72D');
        $this->addSql('ALTER TABLE liste DROP FOREIGN KEY FK_FCF22AF482EA2E54');
        $this->addSql('ALTER TABLE categorie_produit DROP FOREIGN KEY FK_76264285F347EFB');
        $this->addSql('ALTER TABLE liste DROP FOREIGN KEY FK_FCF22AF4F347EFB');
        $this->addSql('ALTER TABLE medias DROP FOREIGN KEY FK_12D2AF81F347EFB');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DA76ED395');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE categorie_produit');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE liste');
        $this->addSql('DROP TABLE medias');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE user');
    }
}
