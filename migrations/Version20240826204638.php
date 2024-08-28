<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240826204638 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE items ADD COLUMN image VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__items AS SELECT id, room_id, name, description FROM items');
        $this->addSql('DROP TABLE items');
        $this->addSql('CREATE TABLE items (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, room_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, CONSTRAINT FK_E11EE94D54177093 FOREIGN KEY (room_id) REFERENCES room (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO items (id, room_id, name, description) SELECT id, room_id, name, description FROM __temp__items');
        $this->addSql('DROP TABLE __temp__items');
        $this->addSql('CREATE INDEX IDX_E11EE94D54177093 ON items (room_id)');
    }
}
