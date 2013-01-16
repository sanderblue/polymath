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
        $solarsystemdata = new \Polymath\AstronomicalData\SolarSystemData();
        $result = $solarsystemdata->getMassSun($sun, $expected);
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
        $solarsystemdata = new \Polymath\AstronomicalData\SolarSystemData();
        $result = $solarsystemdata->getSurfaceTempSun($tempSun, $expected);
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
        $solarsystemdata = new \Polymath\AstronomicalData\SolarSystemData();
        $result = $solarsystemdata->getSurfaceTempEarth($tempEarth, $expected);
        $this->assertEquals($result, $expected, 'Assert the mass of the sun in kilograms'); 
    }

    public function getTestGetSurfaceTempEarthData()
    {
        return array(
            array(290, 290)
        );
    }
}

