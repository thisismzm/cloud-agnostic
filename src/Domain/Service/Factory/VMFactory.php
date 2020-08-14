<?php
namespace App\Domain\Service\Factory;

use App\Domain\Entity\LinuxVM;
use App\Domain\Entity\WindowsVM;
use App\Domain\Entity\AbstractVM;

class VMFactory implements VMFactoryInterface
{
    public function create(string $osName) : AbstractVM
    {
        $vm = null;
        switch ($osName) {
            case AbstractVM::OS_LINUX:
                $vm = new LinuxVM();
                break;
            case AbstractVM::OS_WINDOWS:
                $vm = new WindowsVM();
                break;
            default:
                throw new \Exception('invalid virtual machine os: ' . $osName);
        }
        $vm->setId(uniqid('database_'));
        return $vm;
    }
}
