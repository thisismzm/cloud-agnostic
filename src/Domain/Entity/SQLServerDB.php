<?php
namespace App\Domain\Entity;

class SQLServerDB extends AbstractDB
{
    public function getEngine() : string
    {
        return self::ENGINE_SQL_SERVER;
    }
}
