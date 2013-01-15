<?php

namespace Polymath\AstronomicalData\Test;

use PHPUnit_Framework_TestCase;

class SolorSystemDataTest extends PHPUnit_Framework_TestCase
{

    /**
     * Mass of the sun
     *
     * @dataProvider getTestMassSunData
     **/
    public function testMassSun($sun, $expected)
    {
        $solarsystemdata = new \Polymath\AstronomicalData\SolarSystemData();
        $result = $solarsystemdata->massSun($sun, $expected);
        $this->assertEquals($result, $expected, 'Assert the mass of the sun in kilograms'); 
    }

    public function getTestMassSunData()
    {
        return array(
            array(1.99E+30, 1.99E+30)
        );
    }

    /**
     * Surface Temperature of Earth in Kelvin (K)
     *
     * @dataProvider getTestSurfaceTempEarthData
     **/
    public function testSurfaceTempEarth($tempEarth, $expected)
    {
        $solarsystemdata = new \Polymath\AstronomicalData\SolarSystemData();
        $result = $solarsystemdata->surfaceTempEarth($tempEarth, $expected);
        $this->assertEquals($result, $expected, 'Assert the mass of the sun in kilograms'); 
    }

    public function getTestSurfaceTempEarthData()
    {
        return array(
            array(290, 290)
        );
    }
}

