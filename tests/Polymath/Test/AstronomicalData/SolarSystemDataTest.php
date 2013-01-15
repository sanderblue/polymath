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
    public function testMassSun($sun)
    {
        $solarsystemdata = new \Polymath\AstronomicalData\SolarSystemData();
        $result = $solarsystemdata->massSun($sun);
        $this->assertEquals($result, 'Assert the mass of the sun in kilograms'); 
    }

    public function getTestMassSunData()
    {
        return 1.99 * pow(10, 30); 
    }
}
