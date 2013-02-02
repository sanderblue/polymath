<?php

namespace Polymath\Meteorology\Test;

use PHPUnit_Framework_TestCase;

class SunriseSunsetTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTestSunriseData
     **/
    public function testSunrise($date, $timezone, $latitude, $longitude, $zenith, $expected)
    {

        $sunrise = new \Polymath\Meteorology\SunriseSunset();
        $result = $sunrise->sunrise($date, $timezone, $latitude, $longitude, $zenith);
        $this->assertEquals(round($result, 3), round($expected, 3), 'Assert the sunrise for the given time and location parameters'); 
    }

    public function getTestSunriseData()
    {
        return array(
            array(32, 6, 36.3, 86.6, 110, 20552.577), // still needs some work, but roughly 6 am 
            array(300, 8, 63.636363636364, 44, 33, null) // example of night time, so no sunrise
        ); 
    }
}
