<?php

namespace Polymath\GeometryTest;

use PHPUnit_Framework_TestCase;

class TrigonometryTest extends PHPUnit_Framework_TestCase
{
	/**
     * @dataProvider getTestFundamentalIdentityData
     **/
    public function testFundamentalIdentity($a, $expected)
    {
        $geometry = new \Polymath\Geometry\Trigonometry();
        $result = $geometry->fundamentalIdentity($a);
        $this->assertEquals($result, $expected, 'Assert the trigonometry fundamental identity'); 
    }

    public function getTestFundamentalIdentityData()
    {
        return array(
            array(1, 1)
        ); 
    }

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

    /**
     * @dataProvider getTestSinData
     **/
    public function testSin($x, $expected)
    {
        $algebra = new \Polymath\Geometry\Trigonometry();
        $result = $algebra->sin($x);
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
        $algebra = new \Polymath\Geometry\Trigonometry();
        $result = $algebra->cos($x);
        $this->assertEquals($result, $expected, 'Assert the cosine of x in radians'); 
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
        $algebra = new \Polymath\Geometry\Trigonometry();
        $result = $algebra->tan($x);
        $this->assertEquals($result, $expected, 'Assert the tangent of x in radians'); 
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