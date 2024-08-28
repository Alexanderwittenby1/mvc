<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240826205156 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__room AS SELECT id, room_id, name, description, image FROM room');
        $this->addSql('DROP TABLE room');
        $this->addSql('CREATE TABLE room (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, north_room_id INTEGER DEFAULT NULL, south_room_id INTEGER DEFAULT NULL, east_room_id INTEGER DEFAULT NULL, west_room_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, CONSTRAINT FK_729F519B5A8DC0FE FOREIGN KEY (north_room_id) REFERENCES room (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_729F519B809D13D9 FOREIGN KEY (south_room_id) REFERENCES room (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_729F519BAF32764A FOREIGN KEY (east_room_id) REFERENCES room (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_729F519BFFC876AB FOREIGN KEY (west_room_id) REFERENCES room (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO room (id, north_room_id, name, description, image) SELECT id, room_id, name, description, image FROM __temp__room');
        $this->addSql('DROP TABLE __temp__room');
        $this->addSql('CREATE INDEX IDX_729F519B5A8DC0FE ON room (north_room_id)');
        $this->addSql('CREATE INDEX IDX_729F519B809D13D9 ON room (south_room_id)');
        $this->addSql('CREATE INDEX IDX_729F519BAF32764A ON room (east_room_id)');
        $this->addSql('CREATE INDEX IDX_729F519BFFC876AB ON room (west_room_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__room AS SELECT id, name, description, image FROM room');
        $this->addSql('DROP TABLE room');
        $this->addSql('CREATE TABLE room (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, room_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, north_room VARCHAR(255) NOT NULL, south_room VARCHAR(255) NOT NULL, east_room VARCHAR(255) NOT NULL, west_room VARCHAR(255) NOT NULL, CONSTRAINT FK_729F519B54177093 FOREIGN KEY (room_id) REFERENCES room (id) ON UPDATE NO ACTION ON DELETE NO ACTION NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO room (id, name, description, image) SELECT id, name, description, image FROM __temp__room');
        $this->addSql('DROP TABLE __temp__room');
        $this->addSql('CREATE INDEX IDX_729F519B54177093 ON room (room_id)');
    }
}
