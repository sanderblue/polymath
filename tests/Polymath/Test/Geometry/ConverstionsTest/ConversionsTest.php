<?php

namespace Polymath\Geometry\Conversions;

use PHPUnit_Framework_TestCase;

class ConversionsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTestRad2DegData
     **/
    public function testRad2Deg($x, $expected)
    {
        $conversions = new \Polymath\Geometry\Conversions\Conversions();
        $result = $conversions->rad2deg($x);
        $this->assertEquals($result, $expected, 'Convert value x from radians to degees'); 
    }

    public function getTestRad2DegData()
    {
        return array(
            array(1, 57.295779513082),
            array(30, 1718.8733853925),
            array(60, 3437.7467707849),
            array(90, 5156.6201561774)
        ); 
    }

    /**
     * @dataProvider getTestDeg2RadData
     **/
    public function testDeg2Rad($x, $expected)
    {
        $conversions = new \Polymath\Geometry\Conversions\Conversions();
        $result = $conversions->deg2rad($x);
        $this->assertEquals($result, $expected, 'Convert value x from degrees to radians'); 
    }

    public function getTestDeg2RadData()
    {
        return array(
            array(1, 0.017453292519943),
            array(30, 0.5235987755983),
            array(60, 1.0471975511966)
        ); 
    }
}