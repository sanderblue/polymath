<?php

namespace Polymath\Geometry\Test;

use PHPUnit_Framework_TestCase;

class CoordinatePlaneTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTestDistanceData
     **/
    public function testDistance($x, $y, $expected)
    {
        $geometry = new \Polymath\Geometry\CoordinatePlane();
        $result = $geometry->distance($x, $y);
        $this->assertEquals($result, $expected, 'Assert the distance d between two points x and y'); 
    }

    public function getTestDistanceData()
    {
        return array(
            array(1, 1, 0),
            array(2, 3, 1),
            array(3, 5, 2)
        ); 
    }

    /**
     * Decimal Degrees for calculation
     * Example: 32.30642° N 122.61458° W = +32.30642, -122.61458
     *
     * @dataProvider getTestDistanceLatLonData
     **/
    public function testDistanceLatLon($lat1, $lon1, $lat2, $lon2, $expected)
    {
        $geometry = new \Polymath\Geometry\CoordinatePlane();
        $result = $geometry->distanceLatLon($lat1, $lon1, $lat2, $lon2);
        $this->assertEquals($result, $expected, 'Assert the distance in miles between two latitude-longitude intersections in miles'); 
    }

    public function getTestDistanceLatLonData()
    {
        return array(
            array(52.611644, -0.26304, 51.58734910, -0.30020239, 70.786105565682),
            array(32.30642, -122.61458, -60.589201, -144.24421, 6534.0996497845),
            array(0, 0, 0.01, -0.1, 6.9434590315894)
        ); 
    }
}

