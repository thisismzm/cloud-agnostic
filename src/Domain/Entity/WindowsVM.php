<?php
namespace App\Domain\Entity;

class WindowsVM extends AbstractVM
{
    public function getOS() : string
    {
        return self::OS_WINDOWS;
    }
}
