<?php

namespace Polymath\AstronomicalData\Test;

use PHPUnit_Framework_TestCase;

class SolorSystemDataTest extends PHPUnit_Framework_TestCase
{

    /**
     * Mass of the sun
     *
     * @dataProvider getTestGetMassSunData
     **/
    public function testGetMassSun($sun, $expected)
    {
        $solarSystemData = new \Polymath\AstronomicalData\SolarSystemData();
        $result = $solarSystemData->getMassSun($sun);
        $this->assertEquals($result, $expected, 'Assert the mass of the sun in kilograms'); 
    }

    public function getTestGetMassSunData()
    {
        return array(
            array(1.99E+30, 1.99E+30)
        );
    }

    /**
     * Surface Temperature of the Sun in Kelvin (K)
     *
     * @dataProvider getTestGetSurfaceTempSunData
     **/
    public function testGetSurfaceTempSun($tempSun, $expected)
    {
        $solarSystemData = new \Polymath\AstronomicalData\SolarSystemData();
        $result = $solarSystemData->getSurfaceTempSun($tempSun);
        $this->assertEquals($result, $expected, 'Assert the mass of the sun in kilograms'); 
    }

    public function getTestGetSurfaceTempSunData()
    {
        return array(
            array(6000, 6000)
        );
    }

    /**
     * Surface Temperature of Earth in Kelvin (K)
     *
     * @dataProvider getTestGetSurfaceTempEarthData
     **/
    public function testGetSurfaceTempEarth($tempEarth, $expected)
    {
        $solarSystemData = new \Polymath\AstronomicalData\SolarSystemData();
        $result = $solarSystemData->getSurfaceTempEarth($tempEarth);
        $this->assertEquals($result, $expected, 'Assert the mass of earth in kilograms'); 
    }

    public function getTestGetSurfaceTempEarthData()
    {
        return array(
            array(290, 290)
        );
    }

    /**
     * Mean radius of earth in meters (m)
     *
     * @dataProvider getTestGetMeanRadiusEarthData
     **/
    public function testGetMeanRadiusEarth($radiusEarth, $expected)
    {
        $solarSystemData = new \Polymath\AstronomicalData\SolarSystemData();
        $result = $solarSystemData->getMeanRadiusEarth($radiusEarth);
        $this->assertEquals($result, $expected, 'Assert the mean radius of earth in kilograms'); 
    }

    public function getTestGetMeanRadiusEarthData()
    {
        return array(
            array(6371000, 6371000)
        );
    }

    /**
     * Mean radius of earth's moon in meters (m)
     *
     * @dataProvider getTestGetRadiusMoonData
     **/
    public function testGetRadiusMoon($radiusMoon, $expected)
    {
        $solarSystemData = new \Polymath\AstronomicalData\SolarSystemData();
        $result = $solarSystemData->getRadiusMoon($radiusMoon);
        $this->assertEquals($result, $expected, 'Assert the mean radius of earth in kilograms'); 
    }

    public function getTestGetRadiusMoonData()
    {
        return array(
            array(1741000, 1741000)
        );
    }

    /**
     * Mass of earth's moon in kilograms (kg)
     *
     * @dataProvider getTestGetMassMoonData
     **/
    public function testGetMassMoon($massMoon, $expected)
    {
        $solarSystemData = new \Polymath\AstronomicalData\SolarSystemData();
        $result = $solarSystemData->getMassMoon($massMoon);
        $this->assertEquals($result, $expected, 'Assert the mass of earths moon in kilograms'); 
    }

    public function getTestGetMassMoonData()
    {
        return array(
            array(7.35E+22, 7.35E+22)
        );
    }
}
