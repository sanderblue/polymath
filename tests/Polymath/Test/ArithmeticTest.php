<?php

namespace Polymath\Test;

use PHPUnit_Framework_TestCase;

class ArithmeticTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTestAddData
     **/
    public function testAdd($x, $y, $expected)
    {
        $arithmetic = new \Polymath\Arithmetic();
        $result = $arithmetic->add($x, $y);
        $this->assertEquals($expected, $result, 'Assert the sum of x and y'); 
    }

    public function getTestAddData()
    {
        return array(
            array(1, 1, 2),
            array(2, 2, 4)
        ); 
    }

    /**
     * @dataProvider getTestSubtractData
     **/
    public function testSubtract($x, $y, $expected)
    {
        $arithmetic = new \Polymath\Arithmetic();
        $result = $arithmetic->subtract($x, $y);
        $this->assertEquals($expected, $result, 'Assert the difference between x and y'); 
    }

    public function getTestSubtractData()
    {
        return array(
            array(1, 1, 0),
            array(2, 3, -1)
        ); 
    }
}
