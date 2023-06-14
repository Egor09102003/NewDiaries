<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230515165514 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE user_rating_level_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE user_rating_level_name_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE dairy_of_success_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE "memories_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE dairy_of_success (id INT NOT NULL, note_date TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, practice_date TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, text VARCHAR(255) DEFAULT NULL, ownerID INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_2177790ADB30DDED ON dairy_of_success (ownerID)');
        $this->addSql('CREATE TABLE "memories" (id INT NOT NULL, type_technique VARCHAR(255) DEFAULT NULL, text VARCHAR(255) DEFAULT NULL, ownerID INT DEFAULT NULL, tripID VARCHAR(64) DEFAULT NULL, masterID TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_FFCD285DB30DDED ON "memories" (ownerID)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FFCD285E0B6FCC7 ON "memories" (tripID)');
        $this->addSql('CREATE INDEX IDX_FFCD285896EDEF8 ON "memories" (masterID)');
        $this->addSql('ALTER TABLE dairy_of_success ADD CONSTRAINT FK_2177790ADB30DDED FOREIGN KEY (ownerID) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE "memories" ADD CONSTRAINT FK_FFCD285DB30DDED FOREIGN KEY (ownerID) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE "memories" ADD CONSTRAINT FK_FFCD285E0B6FCC7 FOREIGN KEY (tripID) REFERENCES trip (obj_id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE "memories" ADD CONSTRAINT FK_FFCD285896EDEF8 FOREIGN KEY (masterID) REFERENCES master_type (obj_id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE user_rating_level DROP CONSTRAINT fk_8730bf2dd0bfb9c9');
        $this->addSql('DROP TABLE user_rating_level_name');
        $this->addSql('DROP TABLE user_rating_level');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE dairy_of_success_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE "memories_id_seq" CASCADE');
        $this->addSql('CREATE SEQUENCE user_rating_level_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE user_rating_level_name_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE user_rating_level_name (id INT NOT NULL, level_name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE user_rating_level (id INT NOT NULL, level_name_id INT NOT NULL, level_type VARCHAR(255) NOT NULL, min INT NOT NULL, max INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_8730bf2dd0bfb9c9 ON user_rating_level (level_name_id)');
        $this->addSql('ALTER TABLE user_rating_level ADD CONSTRAINT fk_8730bf2dd0bfb9c9 FOREIGN KEY (level_name_id) REFERENCES user_rating_level_name (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE dairy_of_success DROP CONSTRAINT FK_2177790ADB30DDED');
        $this->addSql('ALTER TABLE "memories" DROP CONSTRAINT FK_FFCD285DB30DDED');
        $this->addSql('ALTER TABLE "memories" DROP CONSTRAINT FK_FFCD285E0B6FCC7');
        $this->addSql('ALTER TABLE "memories" DROP CONSTRAINT FK_FFCD285896EDEF8');
        $this->addSql('DROP TABLE dairy_of_success');
        $this->addSql('DROP TABLE "memories"');
    }
}
