<?php
namespace App\Persistence\Helper;

class Resource
{
    public static function getPath($providerName, $infraName, $resourceType, $base = 'data')
    {
        return "{$base}/{$providerName}/{$infraName}/{$resourceType}";
    }

    public static function getFile($providerName, $infraName, $resourceType, $resourceName, $base = 'data')
    {
        $path = self::getPath($providerName, $infraName, $resourceType, $base);
        return "{$path}/{$resourceName}.json";
    }
}
