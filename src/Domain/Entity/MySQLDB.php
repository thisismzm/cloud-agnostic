<?php
namespace App\Domain\Entity;

class MySQLDB extends AbstractDB
{
    public function getEngine() : string
    {
        return self::ENGINE_MYSQL;
    }
}
