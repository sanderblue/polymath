<?php

namespace Polymath\GeometryTest;

use PHPUnit_Framework_TestCase;

class TrigonometryTest extends PHPUnit_Framework_TestCase
{
	/**
     * Trigonometry Calculations
     *
     * @param positive integer $b base
     * @param positive integer $h height
     *
     * @dataProvider getTestAreaEqTriangleData
     **/
    public function testAreaEqTriangle($b, $h, $expected)
    {
        $geometry = new \Polymath\Geometry\Trigonometry();
        $result = $geometry->areaEqTriangle($b, $h, $expected);
        $this->assertEquals($result, $expected, 'Assert the area of a circle with r radius'); 
    }

    public function getTestAreaEqTriangleData()
    {
        return array(
            array(1, 2, 1),
            array(2, 3, 3)
        ); 
    }
}