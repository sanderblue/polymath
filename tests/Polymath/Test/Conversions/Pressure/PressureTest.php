<?php

namespace Polymath\Conversions\Pressure\Test;

use PHPUnit_Framework_TestCase;

class Volume extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTestAtm2BarsData
     **/
    public function testAtm2Bars($bars, $expected)
    {
        $pressure = new \Polymath\Conversions\Pressure\Pressure();
        $result = $pressure->atm2bars($bars);
        $this->assertEquals($result, $expected, 'Convert atmospheric pressure to bars.'); 
    }

    public function getTestAtm2BarsData()
    {
        return array(
            array(1, 1.01325),
            array(3, 3.03975),
            array(7, 7.09275)
        ); 
    }

    /**
     * @dataProvider getTestAtm2MillibarsData
     **/
    public function testAtm2Millibars($millibars, $expected)
    {
        $pressure = new \Polymath\Conversions\Pressure\Pressure();
        $result = $pressure->atm2millibars($millibars);
        $this->assertEquals($result, $expected, 'Convert atmospheric pressure to millibars.'); 
    }

    public function getTestAtm2MillibarsData()
    {
        return array(
            array(1, 1013.25),
            array(3, 3039.75),
            array(7, 7092.75)
        ); 
    }
}