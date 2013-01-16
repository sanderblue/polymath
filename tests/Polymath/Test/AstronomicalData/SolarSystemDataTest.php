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
        $result = $solarSystemData->getMassSun($sun, $expected);
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
        $result = $solarSystemData->getSurfaceTempSun($tempSun, $expected);
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
        $result = $solarSystemData->getSurfaceTempEarth($tempEarth, $expected);
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
        $result = $solarSystemData->getMeanRadiusEarth($radiusEarth, $expected);
        $this->assertEquals($result, $expected, 'Assert the mean radius of earth in kilograms'); 
    }

    public function getTestGetMeanRadiusEarthData()
    {
        return array(
            array(6371000, 6371000)
        );
    }
}

