<?php
namespace App\Domain\Entity;

class LinuxVM extends AbstractVM
{
    protected string $distro;

    public function setDistro(string $distro) : self
    {
        $this->distro = $distro;
        return $this;
    }

    public function getDistro() : string
    {
        return $this->distro;
    }

    public function getOS() : string
    {
        return self::OS_LINUX;
    }

    public function jsonSerialize()
    {
        return ['content' => array_merge(
            parent::jsonSerialize()['content'],
            ['distro' => $this->distro]
        )];
    }
}
