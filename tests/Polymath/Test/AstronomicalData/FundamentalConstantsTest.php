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

    /**
     * Avogadro's Number
     *
     * @dataProvider getTestAvogadroData
     **/
    public function testAvogadro($n, $expected)
    {
        $fundamentalconstants = new \Polymath\AstronomicalData\FundamentalConstants();
        $result = $fundamentalconstants->avogadro($n, $expected);
        $this->assertEquals($result, $expected, 'Assert Avogadros Number'); 
    }

    public function getTestAvogadroData($n)
    {
        return array(
            array(6.023E+23, 6.023E+23)
        ); 
    }

    /**
     * Gravitational acceleration on earth (g) in m/sec squared
     *
     * @dataProvider getTestGravityData
     **/
    public function testGravity($g, $expected)
    {
        $fundamentalconstants = new \Polymath\AstronomicalData\FundamentalConstants();
        $result = $fundamentalconstants->gravity($g, $expected);
        $this->assertEquals($result, $expected, 'Assert gravitational acceleration g on earth in meters per second squared'); 
    }

    public function getTestGravityData($g)
    {
        return array(
            array(9.81, 9.81) // m/sec squared
        ); 
    }
}

