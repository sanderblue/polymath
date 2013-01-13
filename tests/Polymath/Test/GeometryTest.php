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

    /**
     * @dataProvider getTestAreaSquareData
     **/
    public function testAreaSquare($x, $y, $expected)
    {
        $geometry = new \Polymath\Geometry();
        $result = $geometry->areaSquare($x, $y);
        $this->assertEquals($result, $expected, 'Given x and y, assert the perimeter of a rectangle'); 
    }

    public function getTestAreaSquareData()
    {
        return array(
            array(1, 1, 1),
            array(2, 2, 4),
            array(3, 3, 9)
        ); 
    }

    /**
     * @dataProvider getTestAreaRectangleData
     **/
    public function testAreaRectangle($x, $y, $expected)
    {
        $geometry = new \Polymath\Geometry();
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
     * @dataProvider getTestAreaCircleData
     **/
    public function testAreaCircle($r, $expected)
    {
        $geometry = new \Polymath\Geometry();
        $result = $geometry->areaCircle($r, pi() * $r * $r);
        $this->assertEquals($result, $expected, 'Assert the area of a circle with r radius'); 
    }

    public function getTestAreaCircleData()
    {
        // With a given radius, assert the area of a cirle
        return array(
            array(1, 3.1415926535898),
            array(2, 12.5663706144)
        ); 
    }

    /**
     * @dataProvider getTestAreaEqTriangleData
     **/
    public function testAreaEqTriangle($b, $h, $expected)
    {
        $geometry = new \Polymath\Geometry();
        $result = $geometry->areaEqTriangle($b, $h, $expected);
        $this->assertEquals($result, $expected, 'Assert the area of a circle with r radius'); 
    }

    public function getTestAreaEqTriangleData()
    {
        // With a given radius, assert the area of a cirle
        return array(
            array(1, 2, 1),
            array(2, 3, 3)
        ); 
    }
}
