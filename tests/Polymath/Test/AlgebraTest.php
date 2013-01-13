<?php

namespace Polymath\Test;

use PHPUnit_Framework_TestCase;

class AlgebraTest extends PHPUnit_Framework_TestCase
{

    /**
     * Natural logarithm  base constant e
     *
     * @dataProvider getTestEData
     **/
    public function testE($e, $expected)
    {
        $algebra = new \Polymath\Algebra();
        $result = $algebra->exp($e); // natural logarithm
        $this->assertEquals($result, $expected, 'Assert the base for natural logarithms e'); 
    }

    public function getTestEData()
    {
        return array(
            array(1, 2.71828182846)
        ); 
    }

    /**
     * @dataProvider getTestSqrtData
     **/
    public function testSqrt($x, $expected)
    {
        $algebra = new \Polymath\Algebra();
        $result = $algebra->sqrt($x);
        $this->assertEquals($result, $expected, 'Assert the square root of x'); 
    }

    public function getTestSqrtData()
    {
        return array(
            array(1, 1),
            array(4, 2),
            array(9, 3)
        ); 
    }

    /**
     * @dataProvider getTestAbsData
     **/
    public function testAbs($x, $expected)
    {
        $algebra = new \Polymath\Algebra();
        $result = $algebra->abs($x);
        $this->assertEquals($result, $expected, 'Assert the absolute value of x'); 
    }

    public function getTestAbsData()
    {
        return array(
            array(1, 1),
            array(2, 2),
            array(-3, 3),
            array(-5, 5)
        ); 
    }

    /**
     * @dataProvider getTestSinData
     **/
    public function testSin($x, $expected)
    {
        $algebra = new \Polymath\Algebra();
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
        $algebra = new \Polymath\Algebra();
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
        $algebra = new \Polymath\Algebra();
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

    /**
     * @dataProvider getTestLnData
     **/
    public function testLn($x, $expected)
    {
        $algebra = new \Polymath\Algebra();
        $result = $algebra->log($x); // natural logarithm
        $this->assertEquals($result, $expected, 'Assert the natural log of x'); 
    }

    public function getTestLnData()
    {
        return array(
            array(1, 0),
            array(2, 0.69314718055995),
            array(3, 1.0986122886681)
        ); 
    }
}

