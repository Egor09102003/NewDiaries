<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230515193204 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE memories DROP CONSTRAINT FK_FFCD285E0B6FCC7');
        $this->addSql('ALTER TABLE memories DROP CONSTRAINT FK_FFCD285896EDEF8');
        $this->addSql('ALTER TABLE memories ADD CONSTRAINT FK_FFCD285E0B6FCC7 FOREIGN KEY (tripID) REFERENCES trip (obj_id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE memories ADD CONSTRAINT FK_FFCD285896EDEF8 FOREIGN KEY (masterID) REFERENCES master_type (obj_id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE "memories" DROP CONSTRAINT fk_ffcd285e0b6fcc7');
        $this->addSql('ALTER TABLE "memories" DROP CONSTRAINT fk_ffcd285896edef8');
        $this->addSql('ALTER TABLE "memories" ADD CONSTRAINT fk_ffcd285e0b6fcc7 FOREIGN KEY (tripid) REFERENCES trip (obj_id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE "memories" ADD CONSTRAINT fk_ffcd285896edef8 FOREIGN KEY (masterid) REFERENCES master_type (obj_id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }
}
