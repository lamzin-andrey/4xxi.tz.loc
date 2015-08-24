<?php
/**
 * Миграция заполнения тестовыми данными
*/

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150824213214 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        //schema->getTable('actions_owner')->c
        $this->addSql('INSERT INTO actions_owner (id, name) VALUES(1, \'Apple. Inc\')');
        $this->addSql('INSERT INTO actions_owner (id, name) VALUES(2, \'Microsoft. Corp\')');
        $this->addSql('INSERT INTO actions_owner (id, name) VALUES(3, \'Facebook\')');
        $this->addSql('INSERT INTO actions_owner (id, name) VALUES(4, \'General Electric\')');
        $this->addSql('INSERT INTO actions_owner (id, name) VALUES(5, \'Cisco systems\')');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->addSql('TRUNCATE TABLE actions_owner');
    }
}
