<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230614141535 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE "gratitude_diary_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE "gratitude_diary" (id INT NOT NULL, date TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, text VARCHAR(255) DEFAULT NULL, ownerID INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_B865E1BDDB30DDED ON "gratitude_diary" (ownerID)');
        $this->addSql('ALTER TABLE "gratitude_diary" ADD CONSTRAINT FK_B865E1BDDB30DDED FOREIGN KEY (ownerID) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE "gratitude_diary_id_seq" CASCADE');
        $this->addSql('ALTER TABLE "gratitude_diary" DROP CONSTRAINT FK_B865E1BDDB30DDED');
        $this->addSql('DROP TABLE "gratitude_diary"');
    }
}
