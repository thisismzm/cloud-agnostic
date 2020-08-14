<?php
namespace App\Domain\Entity;

abstract class AbstractResource extends AbstractEntity implements \JsonSerializable
{
    const TYPE_VM = 'VM';
    const TYPE_DB = 'DB';
    
    protected string $varsion;
    protected string $name;
    protected string $type;
    protected Infrastructure $infrastructure;

    public function setVersion(string $version) : self
    {
        $this->version = $version;
        return $this;
    }

    public function getVersion() : string
    {
        return $this->version;
    }

    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setInfrastructure(Infrastructure $infrastructure) : self
    {
        $this->infrastructure = $infrastructure;
        return $this;
    }

    public function getInfrastructure() : Infrastructure
    {
        return $this->infrastructure;
    }

    abstract public function getType() : string;
}
