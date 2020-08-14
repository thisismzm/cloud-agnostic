<?php
namespace App\Domain\Service\Factory;

use App\Domain\Entity\AbstractDB;

interface DBFactoryInterface
{
    public function create(string $engineName) : AbstractDB;
}
