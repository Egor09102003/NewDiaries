<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230515205058 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dairy_of_success DROP CONSTRAINT fk_2177790adb30dded');
        $this->addSql('DROP INDEX idx_2177790adb30dded');
        $this->addSql('ALTER TABLE dairy_of_success RENAME COLUMN ownerid TO owner_id');
        $this->addSql('ALTER TABLE memories DROP CONSTRAINT FK_FFCD285E0B6FCC7');
        $this->addSql('ALTER TABLE memories DROP CONSTRAINT FK_FFCD285896EDEF8');
        $this->addSql('DROP INDEX idx_ffcd285e0b6fcc7');
        $this->addSql('ALTER TABLE memories ADD CONSTRAINT FK_FFCD285E0B6FCC7 FOREIGN KEY (tripID) REFERENCES trip (obj_id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE memories ADD CONSTRAINT FK_FFCD285896EDEF8 FOREIGN KEY (masterID) REFERENCES master_type (obj_id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FFCD285E0B6FCC7 ON memories (tripID)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE "memories" DROP CONSTRAINT fk_ffcd285e0b6fcc7');
        $this->addSql('ALTER TABLE "memories" DROP CONSTRAINT fk_ffcd285896edef8');
        $this->addSql('DROP INDEX UNIQ_FFCD285E0B6FCC7');
        $this->addSql('ALTER TABLE "memories" ADD CONSTRAINT fk_ffcd285e0b6fcc7 FOREIGN KEY (tripid) REFERENCES trip (obj_id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE "memories" ADD CONSTRAINT fk_ffcd285896edef8 FOREIGN KEY (masterid) REFERENCES master_type (obj_id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_ffcd285e0b6fcc7 ON "memories" (tripid)');
        $this->addSql('ALTER TABLE dairy_of_success RENAME COLUMN owner_id TO ownerid');
        $this->addSql('ALTER TABLE dairy_of_success ADD CONSTRAINT fk_2177790adb30dded FOREIGN KEY (ownerid) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_2177790adb30dded ON dairy_of_success (ownerid)');
    }
}
