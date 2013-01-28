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
     * @dataProvider getTestDistanceLatLonData
     **/
    public function testDistanceLatLon($lat1, $lon1, $lat2, $lon2, $expected)
    {
        $geometry = new \Polymath\Geometry\CoordinatePlane();
        $result = $geometry->distanceLatLon($lat1, $lon1, $lat2, $lon2);
        $this->assertEquals($result, $expected, 'Assert the distance between two latitude-longitude intersections in miles'); 
    }

    public function getTestDistanceLatLonData()
    {
        return array(
            array(52.611644, -0.26304, 51.58734910, -0.30020239, 70.786105565682)
        ); 
    }
}

