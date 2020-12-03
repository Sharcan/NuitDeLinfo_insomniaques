<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201203220835 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_answer (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, created_at DATETIME NOT NULL, carbone_score INT DEFAULT NULL, geolocation VARCHAR(255) DEFAULT NULL, spot VARCHAR(255) DEFAULT NULL, date_start DATETIME NOT NULL, duration INT NOT NULL, cleanliness INT DEFAULT NULL, general INT DEFAULT NULL, transport VARCHAR(255) DEFAULT NULL, solarcream TINYINT(1) DEFAULT NULL, cigarette TINYINT(1) DEFAULT NULL, plasticbag TINYINT(1) DEFAULT NULL, wave INT DEFAULT NULL, bathers INT DEFAULT NULL, nautic_activity INT DEFAULT NULL, boats INT DEFAULT NULL, surfers INT DEFAULT NULL, INDEX IDX_BF8F51189D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_answer ADD CONSTRAINT FK_BF8F51189D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user_answer');
    }
}
