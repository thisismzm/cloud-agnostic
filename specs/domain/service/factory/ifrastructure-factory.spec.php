<?php
use App\Domain\Entity\Infrastructure;
use App\Domain\Entity\AbstractCloudProvider;
use App\Domain\Service\Factory\CloudProviderFactory;
use App\Domain\Service\Factory\InfrastructureFactory;

describe('InfrastructureFactory', function () {
    describe('->create()', function () {
        it('should return an Infrastructure object', function () {
            $factory = new CloudProviderFactory();
            $cp = $factory::create(AbstractCloudProvider::NAME_AWS);
            $factory = new InfrastructureFactory($cp);
            $infra = $factory->create('Test');
            expect($infra)->to->be->instanceof(Infrastructure::class);
            expect($infra->getId())->to->not->be->empty();
            expect($infra->getCloudProvider())->to->be->instanceof(AbstractCloudProvider::class);
        });
    });
});
