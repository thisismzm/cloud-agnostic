<?php
namespace App\Domain\Service\Factory;

use App\Domain\Entity\AbstractCloudProvider;
use App\Domain\Entity\AWSCloudProvider;

interface CloudProviderFactoryInterface
{
    public static function create(string $providerName) : AbstractCloudProvider;
}
