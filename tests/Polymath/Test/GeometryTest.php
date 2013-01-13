<?php

namespace Polymath\Test;

use PHPUnit_Framework_TestCase;

class GeometryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTestPerimeterRectangleData
     **/
    public function testPerimeterRectangle($x, $y, $expected)
    {
        $geometry = new \Polymath\Geometry();
        $result = $geometry->perimeterRectangle($x, $y);
        $this->assertEquals($result, $expected, 'Given x and y, assert the perimeter of a rectangle'); 
    }

    public function getTestPerimeterRectangleData()
    {
        return array(
            array(1, 1, 4),
            array(2, 3, 10),
            array(3, 5, 16)
        ); 
    }
}
