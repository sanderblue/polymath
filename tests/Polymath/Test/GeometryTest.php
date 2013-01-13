<?php

namespace Polymath\Test;

use PHPUnit_Framework_TestCase;

class GeometryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTestSinData
     **/
    public function testSin($x, $expected)
    {
        $geometry = new \Polymath\Geometry();
        $result = $geometry->sin($x);
        $this->assertEquals($result, $expected, 'Assert the sine of x in radians'); 
    }

    public function getTestSinData()
    {
        // result in radians
        return array(
            array(1, 0.8414709848),
            array(2, 0.90929742682),
            array(3, 0.14112000806)
        ); 
    }

    /**
     * @dataProvider getTestCosData
     **/
    public function testCos($x, $expected)
    {
        $geometry = new \Polymath\Geometry();
        $result = $geometry->cos($x);
        $this->assertEquals($result, $expected, 'Assert the cosine of x is radians'); 
    }

    public function getTestCosData()
    {
        // result in radians
        return array(
            array(1, 0.54030230586),
            array(2, -0.41614683654),
            array(3, -0.9899924966)
        ); 
    }

    /**
     * @dataProvider getTestTanData
     **/
    public function testTan($x, $expected)
    {
        $geometry = new \Polymath\Geometry();
        $result = $geometry->tan($x);
        $this->assertEquals($result, $expected, 'Assert the tangent of x is radians'); 
    }

    public function getTestTanData()
    {
        // result in radians
        return array(
            array(1, 1.55740772465),
            array(2, -2.18503986326),
            array(3, -0.14254654307)
        ); 
    }
}
