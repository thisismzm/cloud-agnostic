<?php
namespace App\Domain\Service\Repository;

use App\Domain\Entity\Infrastructure;
use App\Persistence\Repository\ResourceRepository;

interface InfrastructureRepositoryInterface
{
    public function __construct(ResourceRepository $resourceRepo);
    public function save(Infrastructure $infrastructure) : bool;
    public function delete(string $name) : bool;
}
