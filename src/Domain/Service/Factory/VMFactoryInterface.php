<?php
namespace App\Domain\Service\Factory;

use App\Domain\Entity\AbstractVM;

interface VMFactoryInterface
{
    public function create(string $osName) : AbstractVM;
}
