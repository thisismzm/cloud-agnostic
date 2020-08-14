<?php
namespace App\Domain\Entity;

abstract class AbstractDB extends AbstractResource
{
    const ENGINE_MYSQL = 'mysql';
    const ENGINE_SQL_SERVER = 'sql_server';

    abstract public function getEngine() : string;

    public function getType() : string
    {
        return self::TYPE_DB;
    }

    public function jsonSerialize()
    {
        return [
            'content' => [
                'engine' => $this->getEngine(),
                'varsion' => $this->version,
                'name' => $this->name,
                'id' => $this->id,
            ],
        ];
    }
}
