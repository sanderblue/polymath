<?php

namespace Polymath\Test;

use PHPUnit_Framework_TestCase;

class AlgebraTest extends PHPUnit_Framework_TestCase
{
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
        $this->assertEquals($result, $expected, 'Assert the absolute value of x'); 
    }

    public function getTestSinData()
    {
        // result in radians
        return array(
            array(1, 0.8414709848),
            array(2, 0.90929742682),
            array(3, 0.14112000806),
        ); 
    }
}
