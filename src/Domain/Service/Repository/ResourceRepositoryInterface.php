<?php
namespace App\Domain\Service\Repository;

use App\Domain\Entity\Infrastructure;
use App\Domain\Entity\AbstractResource;

interface ResourceRepositoryInterface
{
    public function __construct(string $dataDir = 'data');
    public function save(AbstractResource $resource) : bool;
    public function delete(Infrastructure $infrastructure, AbstractResource $resource) : bool;
}
