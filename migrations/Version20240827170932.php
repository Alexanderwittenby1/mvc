<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240827170932 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hand ADD COLUMN is_stand BOOLEAN NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__hand AS SELECT id, player_id FROM hand');
        $this->addSql('DROP TABLE hand');
        $this->addSql('CREATE TABLE hand (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, player_id INTEGER DEFAULT NULL, CONSTRAINT FK_2762428F99E6F5DF FOREIGN KEY (player_id) REFERENCES players (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO hand (id, player_id) SELECT id, player_id FROM __temp__hand');
        $this->addSql('DROP TABLE __temp__hand');
        $this->addSql('CREATE INDEX IDX_2762428F99E6F5DF ON hand (player_id)');
    }
}
