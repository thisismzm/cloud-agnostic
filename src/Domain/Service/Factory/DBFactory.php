<?php
namespace App\Domain\Service\Factory;

use App\Domain\Entity\MySQLDB;
use App\Domain\Entity\AbstractDB;
use App\Domain\Entity\SQLServerDB;

class DBFactory implements DBFactoryInterface
{
    public function create(string $engineName) : AbstractDB
    {
        $db = null;
        switch ($engineName) {
            case AbstractDB::ENGINE_MYSQL:
                $db = new MySQLDB();
                break;
            case AbstractDB::ENGINE_SQL_SERVER:
                $db = new SQLServerDB();
                break;
            default:
                throw new \Exception('invalid database engine: ' . $engineName);
        }
        $db->setId(uniqid('database_'));
        return $db;
    }
}
