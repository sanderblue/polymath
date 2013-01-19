<?php

namespace Polymath\Physics\FundamentalConstants\Test;

use PHPUnit_Framework_TestCase;

class FundamentalConstantsTest extends PHPUnit_Framework_TestCase
{
    /**
     * Speed of Light
     * 
     * @param $c = speed of light in m/sec
     * @return $c
     * @dataProvider getTestGetLightSpeedData
     **/
    public function testGetLightSpeed($c, $expected)
    {
        $fundamentalConstants = new \Polymath\Physics\FundamentalConstants\FundamentalConstants();
        $result = $fundamentalConstants->getLightSpeed($c, $expected);
        $this->assertEquals($result, $expected, 'Assert the speed of light c in meters per second'); 
    }

    public function getTestGetLightSpeedData()
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
     * @dataProvider getTestGetPlancksConstantData
     **/
    public function testGetPlancksConstant($h, $expected)
    {
        $fundamentalConstants = new \Polymath\Physics\FundamentalConstants\FundamentalConstants();
        $result = $fundamentalConstants->getPlancksConstant($h, $expected);
        $this->assertEquals($result, $expected, 'Assert Plancks Constant h in joules per second'); 
    }

    public function getTestGetPlancksConstantData($h)
    {
        return array(
            array(-0.000000000000000000000000000000000663, -0.000000000000000000000000000000000663)
        ); 
    }

    /**
     * Avogadro's Number
     *
     * @dataProvider getTestGetAvogadroData
     **/
    public function testGetAvogadro($n, $expected)
    {
        $fundamentalConstants = new \Polymath\Physics\FundamentalConstants\FundamentalConstants();
        $result = $fundamentalConstants->getAvogadro($n);
        $this->assertEquals($result, $expected, 'Assert Avogadros Number'); 
    }

    public function getTestGetAvogadroData($n)
    {
        return array(
            array(6.023E+23, 6.023E+23)
        ); 
    }

    /**
     * Gravitational acceleration on earth (g) in m/sec squared
     *
     * @dataProvider getTestGetEarthGravityData
     **/
    public function testGetEarthGravity($g, $expected)
    {
        $fundamentalConstants = new \Polymath\Physics\FundamentalConstants\FundamentalConstants();
        $result = $fundamentalConstants->getEarthGravity($g);
        $this->assertEquals($result, $expected, 'Assert gravitational acceleration g on earth in meters per second squared'); 
    }

    public function getTestGetEarthGravityData($g)
    {
        return array(
            array(9.81, 9.81) // m/sec squared
        ); 
    }
}

