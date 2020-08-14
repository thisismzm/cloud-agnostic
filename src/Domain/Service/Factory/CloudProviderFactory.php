<?php
namespace App\Domain\Service\Factory;

use App\Domain\Entity\AbstractCloudProvider;
use App\Domain\Entity\AWSCloudProvider;

class CloudProviderFactory
{
    public static function create(string $providerName) : AbstractCloudProvider
    {
        if ($providerName === AbstractCloudProvider::NAME_AWS) {
            $provider = new AWSCloudProvider();
        } else {
            throw new \Exception('invalid provider name: ' . $providerName);
        }
        $provider->setId(uniqid('cloudprovider_'));
        return $provider;
    }
}
