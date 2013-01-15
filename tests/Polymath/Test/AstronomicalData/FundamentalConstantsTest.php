<?php

namespace Polymath\AstronomicalData\Test;

use PHPUnit_Framework_TestCase;

class FundamentalConstantsTest extends PHPUnit_Framework_TestCase
{
    /**
     * Speed of Light
     * 
     * @param $c = speed of light in m/sec
     * @return $c
     * @dataProvider getTestLightSpeedData
     **/
    public function testLightSpeed($c, $expected)
    {
        $fundamentalconstants = new \Polymath\AstronomicalData\FundamentalConstants();
        $result = $fundamentalconstants->lightSpeed($c, $expected);
        $this->assertEquals($result, $expected, 'Assert the speed of light c in meters per second'); 
    }

    public function getTestLightSpeedData()
    {
        return array(
            array(300000000, 300000000)
        ); 
    }

    /**
     * Planck's Constant
     * 
     * @param $h = Planck's Constant
     * @return $h
     * @dataProvider getTestPlancksConstantData
     **/
    public function testPlancksConstant($h, $expected)
    {
        $fundamentalconstants = new \Polymath\AstronomicalData\FundamentalConstants();
        $result = $fundamentalconstants->plancksConstant($h, $expected);
        $this->assertEquals($result, $expected, 'Assert Plancks Constant h in joules per second'); 
    }

    public function getTestPlancksConstantData($h)
    {
        return array(
            array(-0.000000000000000000000000000000000663, -0.000000000000000000000000000000000663)
        ); 
    }
}
