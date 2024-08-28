<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240826184306 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE interact (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, room_id INTEGER DEFAULT NULL, item_required_id INTEGER DEFAULT NULL, description VARCHAR(255) NOT NULL, CONSTRAINT FK_21F5A0EA54177093 FOREIGN KEY (room_id) REFERENCES room (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_21F5A0EA3D55A409 FOREIGN KEY (item_required_id) REFERENCES item (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_21F5A0EA54177093 ON interact (room_id)');
        $this->addSql('CREATE INDEX IDX_21F5A0EA3D55A409 ON interact (item_required_id)');
        $this->addSql('CREATE TABLE item (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE items (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, room_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, CONSTRAINT FK_E11EE94D54177093 FOREIGN KEY (room_id) REFERENCES room (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_E11EE94D54177093 ON items (room_id)');
        $this->addSql('CREATE TABLE player (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, currentroom_id INTEGER DEFAULT NULL, CONSTRAINT FK_98197A65AAED4D7E FOREIGN KEY (currentroom_id) REFERENCES room (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_98197A65AAED4D7E ON player (currentroom_id)');
        $this->addSql('CREATE TABLE player_item (player_id INTEGER NOT NULL, item_id INTEGER NOT NULL, PRIMARY KEY(player_id, item_id), CONSTRAINT FK_BD01752D99E6F5DF FOREIGN KEY (player_id) REFERENCES player (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_BD01752D126F525E FOREIGN KEY (item_id) REFERENCES item (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_BD01752D99E6F5DF ON player_item (player_id)');
        $this->addSql('CREATE INDEX IDX_BD01752D126F525E ON player_item (item_id)');
        $this->addSql('CREATE TABLE room (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, room_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, north_room VARCHAR(255) NOT NULL, south_room VARCHAR(255) NOT NULL, east_room VARCHAR(255) NOT NULL, west_room VARCHAR(255) NOT NULL, CONSTRAINT FK_729F519B54177093 FOREIGN KEY (room_id) REFERENCES room (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_729F519B54177093 ON room (room_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE interact');
        $this->addSql('DROP TABLE item');
        $this->addSql('DROP TABLE items');
        $this->addSql('DROP TABLE player');
        $this->addSql('DROP TABLE player_item');
        $this->addSql('DROP TABLE room');
    }
}
