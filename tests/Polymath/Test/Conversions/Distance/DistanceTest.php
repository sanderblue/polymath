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

    /**
     * Meters (m) to Feet (ft)
     *
     * @dataProvider getTestMeters2FeetData
     **/
    public function testMeters2Feet($m, $expected)
    {
        $distance = new \Polymath\Conversions\Distance\Distance();
        $result = $distance->meters2feet($m);
        $this->assertEquals($result, $expected, 'Convert meters to feet'); 
    }

    public function getTestMeters2FeetData()
    {
        return array(
            array(1, 3.28),
            array(3, 9.84),
            array(6, 19.68),
            array(17, 55.76)
        ); 
    }

    /**
     * Feet (ft) to Meters (m)
     *
     * @dataProvider getTestFeet2MetersData
     **/
    public function testFeet2Meters($ft, $expected)
    {
        $distance = new \Polymath\Conversions\Distance\Distance();
        $result = $distance->feet2Meters($ft);
        $this->assertEquals($result, $expected, 'Convert feet to meters'); 
    }

    public function getTestFeet2MetersData()
    {
        return array(
            array(3.28, 1),
            array(9, 2.7439024390244),
            array(12, 3.6585365853659),
            array(21, 6.4024390243902)
        ); 
    }

    /**
     * Meters (m) to Yards (yd)
     *
     * @dataProvider getTestMeters2YardsData
     **/
    public function testMeters2Yards($m, $expected)
    {
        $distance = new \Polymath\Conversions\Distance\Distance();
        $result = $distance->meters2Yards($m);
        $this->assertEquals($result, $expected, 'Convert meters (m) to yards (yd)'); 
    }

    public function getTestMeters2YardsData()
    {
        return array(
            array(1, 1.09361),
            array(9, 9.84249)
        ); 
    }

    /**
     * Yards (yd) to Meters (yd)
     *
     * @dataProvider getTestYards2MetersData
     **/
    public function testYards2Meters($yd, $expected)
    {
        $distance = new \Polymath\Conversions\Distance\Distance();
        $result = $distance->yards2meters($yd);
        $this->assertEquals($result, $expected, 'Convert yards (yd) to meters (m)'); 
    }

    public function getTestYards2MetersData()
    {
        return array(
            array(3, 2.7432),
            array(99, 90.5256)
        ); 
    }
}
