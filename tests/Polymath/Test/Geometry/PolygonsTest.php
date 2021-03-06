<?php

namespace Polymath\GeometryTest;

use PHPUnit_Framework_TestCase;

class PolygonsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTestPerimeterRectangleData
     **/
    public function testPerimeterRectangle($x, $y, $expected)
    {
        $geometry = new \Polymath\Geometry\Polygons();
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

    /**
     * Unit Sided Rectangle
     *
     * @dataProvider getTestAreaSquareData
     **/
    public function testAreaSquare($x, $expected)
    {
        $geometry = new \Polymath\Geometry\Polygons();
        $result = $geometry->areaSquare($x);
        $this->assertEquals($result, $expected, 'Given x and y, assert the perimeter of a rectangle'); 
    }

    public function getTestAreaSquareData()
    {
        return array(
            array(1, 1),
            array(2, 4),
            array(3, 9)
        ); 
    }

    /**
     * @dataProvider getTestAreaRectangleData
     **/
    public function testAreaRectangle($x, $y, $expected)
    {
        $geometry = new \Polymath\Geometry\Polygons();
        $result = $geometry->areaRectangle($x, $y);
        $this->assertEquals($result, $expected, 'Given x and y, assert the perimeter of a rectangle'); 
    }

    public function getTestAreaRectangleData()
    {
        return array(
            array(1, 1, 1),
            array(2, 3, 6),
            array(3, 6, 18)
        ); 
    }

    /**
     * @dataProvider getTestAreaTrapezoidData
     **/
    public function testAreaTrapezoid($b1, $b2, $h, $expected)
    {
        $geometry = new \Polymath\Geometry\Polygons();
        $result = $geometry->areaTrapezoid($b1, $b2, $h, $expected);
        $this->assertEquals($result, $expected, 
            'Assert the area of a trapezoid with height h and top-base b1 and bottom-base b2'
            ); 
    }

    public function getTestAreaTrapezoidData()
    {
        return array(
            array(1, 2, 1, 2),
            array(2, 3, 2, 5)
        ); 
    }

    /**
     * Compute the area of the specfied polygon on an XY Coordinate Plane
     *
     * @param array $x = x coordinates of a polygon
     * @param array $y = y coordinates of a polygon
     *
     * @dataProvider getTestAreaPolygonData
     **/
    public function testAreaPolygon($x, $y, $expected)
    {
        $geometry = new \Polymath\Geometry\Polygons();
        $result = $geometry->areaPolygon($x, $y);
        $this->assertEquals($result, $expected, 'Given x and y coordinates, assert the area of a polygon'); 
    }

    public function getTestAreaPolygonData()
    {
        return array(
            array($x = array(2,4,4,2), $y = array(2,2,4,4), 4),
            array($x = array(1,6,6,1), $y = array(1,1,6,6), 25)
        ); 
    }
}

