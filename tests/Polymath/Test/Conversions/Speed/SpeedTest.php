<?php

namespace Polymath\Conversions\Speed\Test;

use PHPUnit_Framework_TestCase;

class Speed extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getSpeedOfSound2MphData
     **/
    public function testSpeedOfSound2Mph($mph, $expected)
    {
        $speed = new \Polymath\Conversions\Speed\Speed();
        $result = $speed->speedOfSound2Mph($mph);
        $this->assertEquals($result, $expected, 'Convert the speed of sound at standard atmospherical pressure to miles per hour (mph).');
    }

    public function getSpeedOfSound2MphData()
    {
        return array(
            array(1, 767.2691481747),
            array(60, 46036.148890482),
            array(100, 76726.91481747)
        );
    }
}