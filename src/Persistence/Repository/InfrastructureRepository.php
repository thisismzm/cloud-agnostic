<?php
namespace App\Persistence\Repository;

use App\Domain\Entity\Infrastructure;
use App\Domain\Service\Repository\InfrastructureRepositoryInterface;

class InfrastructureRepository implements InfrastructureRepositoryInterface
{
    protected ResourceRepository $resourceRepo;

    public function __construct(ResourceRepository $resourceRepo)
    {
        $this->resourceRepo = $resourceRepo;
    }

    public function save(Infrastructure $infrastructure) : bool
    {
        $result = true;
        foreach ($infrastructure->getResources() as $resource) {
            $result = $this->resourceRepo->save($resource) && $result;
        }
        return $result;
    }

    public function delete(string $name) : bool
    {
        $result = true;
        $directory = new \RecursiveDirectoryIterator($this->resourceRepo->dataDir);
        $iterator = new \RecursiveIteratorIterator($directory);
        $regex = new \RegexIterator($iterator, '/^.+\/' . $name . '\/.+\.json$/i', \RecursiveRegexIterator::GET_MATCH);
        foreach ($regex as $r) {
            $result = unlink($r[0]) && $result;
        }
        return $result;
    }
}
