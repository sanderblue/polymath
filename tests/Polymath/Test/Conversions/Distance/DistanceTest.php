<?php

namespace Polymath\Conversions\Distance\Test;

use PHPUnit_Framework_TestCase;

class DistanceTest extends PHPUnit_Framework_TestCase
{
    /**
     * Miles to Kilometers
     *
     * @dataProvider getTestMi2KmData
     **/
    public function testMi2Km($mi, $expected)
    {
        $distance = new \Polymath\Conversions\Distance\Distance();
        $result = $distance->mi2km($mi);
        $this->assertEquals($result, $expected, 'Convert miles to kilometers'); 
    }

    public function getTestMi2KmData()
    {
        return array(
            array(1, 1.609344),
            array(2, 3.218688),
            array(634, 1020.324096)
        ); 
    }

    /**
     * Kilometers to Miles
     *
     * @dataProvider getTestKm2MiData
     **/
    public function testKm2Mi($km, $expected)
    {
        $distance = new \Polymath\Conversions\Distance\Distance();
        $result = $distance->km2mi($km);
        $this->assertEquals($result, $expected, 'Convert kilometers to miles'); 
    }

    public function getTestKm2MiData()
    {
        return array(
            array(1, 0.621371),
            array(2, 1.242742),
            array(75, 46.602825)

        ); 
    }
}
