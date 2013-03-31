<?php

namespace Polymath\Conversions\Temperature\Test;

use PHPUnit_Framework_TestCase;

class Temperature extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTestCelsius2FahrenheitData
     **/
    public function testCelsius2Fahrenheit($temp, $expected)
    {
        $temperature = new \Polymath\Conversions\Temperature\Temperature();
        $result = $temperature->Celsius2Fahrenheit($temp);
        $this->assertEquals($result, $expected, 'Convert degrees Celsius to degrees Fahrenheit'); 
    }

    public function getTestCelsius2FahrenheitData()
    {
        return array(
            array(0, 32.0),
            array(1, 33.8),
            array(3, 37.4),
            array(100, 212.0)
        ); 
    }

    /**
     * @dataProvider getTestFahrenheit2CelsiusData
     **/
    public function testFahrenheit2Celsius($temp, $expected)
    {
        $temperature = new \Polymath\Conversions\Temperature\Temperature();
        $result = $temperature->Fahrenheit2Celsius($temp);
        $this->assertEquals($result, $expected, 'Convert degrees Fahrenheit to degress Celsius'); 
    }

    public function getTestFahrenheit2CelsiusData()
    {
        return array(
            array(32, 0.0),
            array(72, 22.222222222222),
            array(212, 100.0)
        ); 
    }
}