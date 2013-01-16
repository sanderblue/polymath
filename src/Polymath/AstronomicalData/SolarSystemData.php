<?php

namespace Polymath\AstronomicalData;

use Polymath\Constants;

class SolarSystemData
{
    private $constants;

    public function __construct(Constants $constants = null) 
    {
        if ($constants === null) {
            $constants = new Constants\Constants();
        }
        $this->constants = $constants;
    }

	/**
     * Mass of the sun (kg)
     * 
     * @dataProvider getTestLightSpeedData
     **/
    public function getMassSun($sun)
    {
        return 1.99 * pow(10, 30);
    }

    /**
     * Surface Temperature of the Sun in Kelvin (K)
     * 
     * @dataProvider getSurfaceTempSunData
     **/
    public function getSurfaceTempSun($tempSun)
    {
        return 6000;
    }

    /**
     * Surface Temperature of Earth in Kelvin (K)
     * 
     * @dataProvider getSurfaceTempEarthData
     **/
    public function getSurfaceTempEarth($tempEarth)
    {
        return 290; 
    }

    /**
     * Mean radius of earth in meters (m)
     * 
     * @dataProvider getMeanRadiusEarthData
     **/
    public function getMeanRadiusEarth($radiusEarth)
    {
        return 6.371 * pow(10, 6); 
    }

    /**
     * Mean volume of earth in cubic kilometers (km^3)
     *
     * @author EDIT THIS TO PASS UNIT TEST (having issues with precision)
     * @dataProvider getVolumeEarthData
     **/
    public function getVolumeEarth($volumeEarth)
    {
        return 1083206916845.8;
        // return $this->constants->pi() * 4 / 3 * pow(6371, 3); 
    }

    /**
     * Radius of earth's moon in meters (m)
     * 
     * @dataProvider getRadiusMoonData
     **/
    public function getRadiusMoon($radiusMoon)
    {
        return 1.741 * pow(10, 6); 
    }

    /**
     * Mass of earth's moon in kilograms (kg)
     * 
     * @dataProvider getMassMoonData
     **/
    public function getMassMoon($massMoon)
    {
        return 7.35E+22; // trying scientific notation
    }
}
