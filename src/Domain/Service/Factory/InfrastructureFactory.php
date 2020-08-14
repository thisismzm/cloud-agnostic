<?php
namespace App\Domain\Service\Factory;

use App\Domain\Entity\Infrastructure;
use App\Domain\Entity\AbstractCloudProvider;

class InfrastructureFactory implements InfrastructureFactoryInterface
{
    protected AbstractCloudProvider $provider;

    public function __construct(AbstractCloudProvider $provider)
    {
        $this->provider = $provider;
    }

    public function create(string $name) : Infrastructure
    {
        $infrastructure = new Infrastructure();
        $infrastructure->setId(uniqid('infrastructure_'));
        $infrastructure->setName($name);
        $infrastructure->setCloudProvider($this->provider);
        $infrastructure->setResources([]);
        return $infrastructure;
    }
}
