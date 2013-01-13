<?php

namespace Polymath\Test;

use PHPUnit_Framework_TestCase;

class ConstantsTest extends PHPUnit_Framework_TestCase
{

    /**
     * Pi
     *
     * @dataProvider getTestPiData
     **/
    public function testPi($x, $expected)
    {
        $constants = new \Polymath\Constants();
        $result = $constants->pi($x);
        $this->assertEquals($result, $expected, 'Assert the the numerical value for Pi'); 
    }

    public function getTestPiData()
    {
        return array(
            array(1, 3.14159265359)
        ); 
    }

    /**
     * e = the base for natural logarithms
     *
     * @dataProvider getTestEData
     **/
    public function testE($e, $expected)
    {
        $constants = new \Polymath\Constants();
        $result = $constants->exp($e); // natural logarithm
        $this->assertEquals($result, $expected, 'Assert the base for natural logarithms e'); 
    }

    public function getTestEData()
    {
        return array(
            array(1, 2.71828182846)
        ); 
    }
}

