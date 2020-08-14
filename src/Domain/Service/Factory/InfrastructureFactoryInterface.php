<?php
namespace App\Domain\Service\Factory;

use App\Domain\Entity\Infrastructure;
use App\Domain\Entity\AbstractCloudProvider;

interface InfrastructureFactoryInterface
{
    public function __construct(AbstractCloudProvider $provider);
    public function create(string $name) : Infrastructure;
}
