<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240827171355 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE book (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(255) NOT NULL, isbn VARCHAR(255) NOT NULL, author VARCHAR(255) NOT NULL, image_url VARCHAR(255) DEFAULT NULL)');
        $this->addSql('CREATE TABLE card (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, suit VARCHAR(255) NOT NULL, rank VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE hand (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, player_id INTEGER DEFAULT NULL, is_stand BOOLEAN NOT NULL, CONSTRAINT FK_2762428F99E6F5DF FOREIGN KEY (player_id) REFERENCES players (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_2762428F99E6F5DF ON hand (player_id)');
        $this->addSql('CREATE TABLE hand_card (hand_id INTEGER NOT NULL, card_id INTEGER NOT NULL, PRIMARY KEY(hand_id, card_id), CONSTRAINT FK_D80CF216EDDBB459 FOREIGN KEY (hand_id) REFERENCES hand (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_D80CF2164ACC9A20 FOREIGN KEY (card_id) REFERENCES card (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_D80CF216EDDBB459 ON hand_card (hand_id)');
        $this->addSql('CREATE INDEX IDX_D80CF2164ACC9A20 ON hand_card (card_id)');
        $this->addSql('CREATE TABLE players (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, bank_account INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE product (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, value INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE messenger_messages (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, body CLOB NOT NULL, headers CLOB NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , available_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , delivered_at DATETIME DEFAULT NULL --(DC2Type:datetime_immutable)
        )');
        $this->addSql('CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)');
        $this->addSql('CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)');
        $this->addSql('CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE book');
        $this->addSql('DROP TABLE card');
        $this->addSql('DROP TABLE hand');
        $this->addSql('DROP TABLE hand_card');
        $this->addSql('DROP TABLE players');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
