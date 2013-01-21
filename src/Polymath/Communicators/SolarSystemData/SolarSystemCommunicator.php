<?php

namespace Polymath\Communicators\SolarSystemData;

use Polymath\Physics\AstronomicalData\SolarSystemData;

class SolarSystemCommunicator
{
    private $earthsInSun;

    public function __construct(SolarSystemData $earthsInSun = null) 
    {
        if ($earthsInSun === null) {
            $earthsInSun = new SolarSystemData();
        }
        $this->earthsInSun = $earthsInSun;
    }

    public function getEarthsInSun()
    {
        return ($this->earthsInSun->getVolumeSun() / $this->earthsInSun->getVolumeEarth());
    }

}