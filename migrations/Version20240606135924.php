<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240606135924 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE membres ADD dahiras_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE membres ADD CONSTRAINT FK_594AE39C6F8C0AC4 FOREIGN KEY (dahiras_id) REFERENCES dahiras (id)');
        $this->addSql('CREATE INDEX IDX_594AE39C6F8C0AC4 ON membres (dahiras_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE membres DROP FOREIGN KEY FK_594AE39C6F8C0AC4');
        $this->addSql('DROP INDEX IDX_594AE39C6F8C0AC4 ON membres');
        $this->addSql('ALTER TABLE membres DROP dahiras_id');
    }
}
