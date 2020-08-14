<?php
use App\Domain\Entity\AbstractCloudProvider;
use App\Domain\Service\Factory\CloudProviderFactory;

describe('CloudProviderFactory', function () {
    describe('::create()', function () {
        it('should return an CloudProvider object', function () {
            $factory = new CloudProviderFactory();
            $cp = $factory::create(AbstractCloudProvider::NAME_AWS);
            expect($cp)->to->be->instanceof(AbstractCloudProvider::class);
            expect($cp->getId())->to->not->be->empty;
        });
    });
});
