<?php
namespace App\Domain\Entity;

abstract class AbstractCloudProvider extends AbstractEntity
{
    const NAME_AWS = 'AWS';

    abstract public function getName() : string;
}
