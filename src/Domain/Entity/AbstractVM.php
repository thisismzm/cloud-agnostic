<?php
namespace App\Domain\Entity;

abstract class AbstractVM extends AbstractResource
{
    const OS_LINUX = 'linux';
    const OS_WINDOWS = 'windows';

    protected int $CPUCoreNum;
    protected int $RAMCapacity;
    protected int $storageSize;

    abstract public function getOS() : string;

    public function getType() : string
    {
        return self::TYPE_VM;
    }

    public function setCPUCoreNum(int $CPUCoreNum) : self
    {
        $this->CPUCoreNum = $CPUCoreNum;
        return $this;
    }

    public function getCPUCoreNum() : int
    {
        return $this->CPUCoreNum;
    }

    public function setRAMCapacity(int $RAMCapacity) : self
    {
        $this->RAMCapacity = $RAMCapacity;
        return $this;
    }

    public function getRAMCapacity() : int
    {
        return $this->RAMCapacity;
    }

    public function setStorageSize(int $storageSize) : self
    {
        $this->storageSize = $storageSize;
        return $this;
    }

    public function getStorageSize() : int
    {
        return $this->storageSize;
    }

    public function jsonSerialize()
    {
        return [
            'content' => [
                'os' => $this->getOS(),
                'CPUCoreNum' => $this->CPUCoreNum,
                'RAMCapacity' => $this->RAMCapacity,
                'storageSize' => $this->storageSize,
                'varsion' => $this->version,
                'name' => $this->name,
                'id' => $this->id,
            ],
        ];
    }
}
