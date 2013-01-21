<?php

namespace Polymath\Physics\AstronomicalData\Test;

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
        $solarSystemData = new \Polymath\Physics\AstronomicalData\SolarSystemData();
        $result = $solarSystemData->getMassSun();
        $this->assertEquals($result, $expected, 'Assert the mass of the sun in kilograms'); 
    }

    public function getTestGetMassSunData()
    {
        return array(
            array(1.99E+30, 1.99E+30)
        );
    }

    /**
     * Volume of the sun
     **/
    public function testGetVolumeSun()
    {
        $solarSystemData = new \Polymath\Physics\AstronomicalData\SolarSystemData();
        $this->assertEquals(bcscale(1.414348326301E+18), $solarSystemData->getVolumeSun(), 'Assert the mass of the sun in kilograms'); 
    }

    /**
     * Surface Temperature of the Sun in Kelvin (K)
     *
     * @dataProvider getTestGetSurfaceTempSunData
     **/
    public function testGetSurfaceTempSun($tempSun, $expected)
    {
        $solarSystemData = new \Polymath\Physics\AstronomicalData\SolarSystemData();
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
        $solarSystemData = new \Polymath\Physics\AstronomicalData\SolarSystemData();
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
        $solarSystemData = new \Polymath\Physics\AstronomicalData\SolarSystemData();
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
     * Mean volume of earth in cubic kilometers (km^3)
     *
     * @author EDIT THIS TO PASS UNIT TEST (having issues with precision)
     **/
    public function testGetVolumeEarth()
    {
        $solarSystemData = new \Polymath\Physics\AstronomicalData\SolarSystemData();
        $this->assertEquals(1083206916845.8, $solarSystemData->getVolumeEarth(), 'Assert the mean volume of earth in cubic kilometers'); 
    }

    /**
     * Mean radius of earth's moon in meters (m)
     *
     * @dataProvider getTestGetRadiusMoonData
     **/
    public function testGetRadiusMoon($radiusMoon, $expected)
    {
        $solarSystemData = new \Polymath\Physics\AstronomicalData\SolarSystemData();
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
        $solarSystemData = new \Polymath\Physics\AstronomicalData\SolarSystemData();
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
