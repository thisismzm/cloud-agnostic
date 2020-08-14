<?php
use App\Domain\Entity\LinuxVM;
use App\Domain\Entity\WindowsVM;
use App\Domain\Entity\AbstractVM;
use App\Domain\Service\Factory\VMFactory;

describe('VMFactory', function () {
    describe('->create()', function () {
        it('should return LinuxVM object', function () {
            $vmFactory = new VMFactory();
            $vm = $vmFactory->create(AbstractVM::OS_LINUX);
            expect($vm)->to->be->instanceof(LinuxVM::class);
        });
        it('should return WindowsVM object', function () {
            $vmFactory = new VMFactory();
            $vm = $vmFactory->create(AbstractVM::OS_WINDOWS);
            expect($vm)->to->be->instanceof(WindowsVM::class);
        });
    });
});
