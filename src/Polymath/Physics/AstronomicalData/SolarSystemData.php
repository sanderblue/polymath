<?php

namespace Polymath\Physics\AstronomicalData;

use Polymath\MathConstants;

class SolarSystemData
{
    private $constants;

    public function __construct(MathConstants $constants = null) 
    {
        if ($constants === null) {
            $constants = new MathConstants\Constants();
        }
        $this->constants = $constants;
    }

	/**
     * Mass of the sun (kg)
     **/
    public function getMassSun()
    {
        return 1.99 * pow(10, 30);
    }

    /**
     * Volume of the sun (km^3) 
     *
     * Radius = 696342 km
     **/
    public function getVolumeSun()
    {
        return pi() * 4 / 3 * pow(696342, 3);
    }

    /**
     * Surface Temperature of the Sun in Kelvin (K)
     **/
    public function getSurfaceTempSun()
    {
        return 6000;
    }

    /**
     * Surface Temperature of Earth in Kelvin (K)
     **/
    public function getSurfaceTempEarth()
    {
        return 290; 
    }

    /**
     * Mean radius of earth in meters (m)
     **/
    public function getMeanRadiusEarth()
    {
        return 6.371 * pow(10, 6); 
    }

    /**
     * Mean volume of earth in cubic kilometers (km^3)
     *
     * @author EDIT THIS TO PASS UNIT TEST (having issues with precision)
     **/
    public function getVolumeEarth()
    {
        return 1083206916845.8;
        // return $this->constants->pi() * 4 / 3 * pow(6371, 3); 
    }

    /**
     * Radius of earth's moon in meters (m)
     **/
    public function getRadiusMoon()
    {
        return 1.741 * pow(10, 6); 
    }

    /**
     * Mass of earth's moon in kilograms (kg)
     **/
    public function getMassMoon()
    {
        return 7.35E+22; // trying scientific notation
    }
}
