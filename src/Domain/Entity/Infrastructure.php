<?php
namespace App\Domain\Entity;

class Infrastructure extends AbstractEntity
{
    protected string $name;
    protected AbstractCloudProvider $provider;
    protected array $resources;

    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setCloudProvider(AbstractCloudProvider $provider) : self
    {
        $this->provider = $provider;
        return $this;
    }

    public function getCloudProvider() : AbstractCloudProvider
    {
        return $this->provider;
    }

    public function getResources() : array
    {
        return $this->resources;
    }

    public function setResources(array $resources) : self
    {
        $this->resources = $resources;
        return $this;
    }

    public function addResource(AbstractResource $resource) : self
    {
        $this->resources[] = $resource;
        return $this;
    }
}
