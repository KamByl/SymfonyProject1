<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221007081645 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, username VARCHAR(50) NOT NULL, email VARCHAR(100) NOT NULL, adress_street VARCHAR(255) NOT NULL, adress_suite VARCHAR(255) NOT NULL, adress_city VARCHAR(100) NOT NULL, adress_zipcode VARCHAR(50) NOT NULL, adress_geo_lat VARCHAR(20) NOT NULL, adress_geo_lng VARCHAR(20) NOT NULL, phone VARCHAR(50) NOT NULL, website VARCHAR(255) NOT NULL, company_name VARCHAR(255) NOT NULL, company_catch_phrase VARCHAR(255) NOT NULL, company_bs VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE users');
    }
}
