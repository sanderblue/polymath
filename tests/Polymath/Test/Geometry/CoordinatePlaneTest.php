<?php

namespace Polymath\Geometry\Test;

use PHPUnit_Framework_TestCase;

class CoordinatePlaneTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTestDistanceData
     **/
    public function testDistance($x, $y, $d, $expected)
    {
        $geometry = new \Polymath\Geometry\CoordinatePlane();
        $result = $geometry->distance($x, $y);
        $this->assertEquals($result, $expected, 'Assert the distance d between two points x and y'); 
    }

    public function getTestDistanceData()
    {
        return array(
            array(1, 1, '', 0),
            array(2, 3, '', 1),
            array(3, 5, '', 2)
        ); 
    }
}
