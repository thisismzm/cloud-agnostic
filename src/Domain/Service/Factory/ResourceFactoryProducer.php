<?php
namespace App\Domain\Service\Factory;

use App\Domain\Entity\AbstractResource;

class ResourceFactoryProducer
{
    public static function produce($resourceType)
    {
        $factory = null;
        switch ($resourceType) {
            case AbstractResource::TYPE_DB:
                $factory = new DBFactory();
                break;
            case AbstractResource::TYPE_VM:
                $factory = new VMFactory();
                break;
            default:
                throw new \Exception('invalid resource type: ' . $resourceType);
        }
        return $factory;
    }
}
