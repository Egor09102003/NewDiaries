<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230320013055 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE social_network (obj_id VARCHAR(64) NOT NULL, user_id_id INT NOT NULL, name VARCHAR(255) NOT NULL, link TEXT NOT NULL, PRIMARY KEY(obj_id))');
        $this->addSql('CREATE INDEX IDX_EFFF52219D86650F ON social_network (user_id_id)');
        $this->addSql('ALTER TABLE social_network ADD CONSTRAINT FK_EFFF52219D86650F FOREIGN KEY (user_id_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE "user" ADD is_master BOOLEAN DEFAULT false NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE social_network DROP CONSTRAINT FK_EFFF52219D86650F');
        $this->addSql('DROP TABLE social_network');
        $this->addSql('ALTER TABLE "user" DROP is_master');
    }
}
