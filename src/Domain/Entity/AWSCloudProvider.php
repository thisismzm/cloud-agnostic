<?php
namespace App\Domain\Entity;

class AWSCloudProvider extends AbstractCloudProvider
{
    public function getName() : string
    {
        return self::NAME_AWS;
    }
}
