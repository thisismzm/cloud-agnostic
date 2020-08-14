<?php
namespace App\Persistence\Repository;

use App\Persistence\Helper\Resource;
use App\Domain\Entity\Infrastructure;
use App\Domain\Entity\AbstractResource;
use App\Domain\Service\Repository\ResourceRepositoryInterface;

class ResourceRepository implements ResourceRepositoryInterface
{
    public $dataDir;

    public function __construct(string $dataDir = 'data')
    {
        $this->dataDir = $dataDir;
    }

    public function save(AbstractResource $resource) : bool
    {
        $providerName = $resource->getInfrastructure()->getCloudProvider()->getName();
        $infraName = $resource->getInfrastructure()->getName();
        $resourceType = $resource->getType();
        $name = $resource->getName();
        $data = json_encode($resource, JSON_PRETTY_PRINT);
        $path = Resource::getPath($providerName, $infraName, $resourceType, $this->dataDir);
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
        $file = Resource::getFile($providerName, $infraName, $resourceType, $name, $this->dataDir);
        return file_put_contents($file, $data) !== false;
    }

    public function delete(Infrastructure $infrastructure, AbstractResource $resource) : bool
    {
        $providerName = $infrastructure->getCloudProvider()->getName();
        $infraName = $resource->getInfrastructure()->getName();
        $resourceType = $resource->getType();
        $name = $resource->getName();
        $file = Resource::getFile($providerName, $infraName, $resourceType, $name, $this->dataDir);
        return unlink($file);
    }
}
