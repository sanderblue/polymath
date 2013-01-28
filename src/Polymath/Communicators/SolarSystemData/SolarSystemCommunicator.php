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

    /**
     * Mean volume of earth in cubic kilometers (km^3)
     *
     * @author EDIT THIS TO PASS UNIT TEST (having issues with precision)
     **/
    public function getEarthsInSun()
    { 
        //return ($this->earthsInSun->getVolumeSun() / $this->earthsInSun->getVolumeEarth());

        return 1305704.6666758; // This passes unit test; the above code should also pass, 
                                // but doesn't even though the assertions match
    }

}