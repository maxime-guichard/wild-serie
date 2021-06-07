<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210607074117 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE program ADD category_id INT NOT NULL, ADD many_to_one_id INT NOT NULL');
        $this->addSql('ALTER TABLE program ADD CONSTRAINT FK_92ED778412469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE program ADD CONSTRAINT FK_92ED7784EAB5DEB FOREIGN KEY (many_to_one_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_92ED778412469DE2 ON program (category_id)');
        $this->addSql('CREATE INDEX IDX_92ED7784EAB5DEB ON program (many_to_one_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE program DROP FOREIGN KEY FK_92ED778412469DE2');
        $this->addSql('ALTER TABLE program DROP FOREIGN KEY FK_92ED7784EAB5DEB');
        $this->addSql('DROP INDEX IDX_92ED778412469DE2 ON program');
        $this->addSql('DROP INDEX IDX_92ED7784EAB5DEB ON program');
        $this->addSql('ALTER TABLE program DROP category_id, DROP many_to_one_id');
    }
}
