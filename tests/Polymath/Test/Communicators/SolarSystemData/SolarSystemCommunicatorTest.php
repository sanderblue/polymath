<?php

namespace Polymath\Communicators\SolarSystemData\Test;

use PHPUnit_Framework_TestCase;

class SolorSystemCommunicatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * How many earths can fit inside the sun's volume?
     *
     * @dataProvider getTestGetEarthsInSunData
     **/
    public function testGetEarthsInSun($expected)
    {
        $communicator = new \Polymath\Communicators\SolarSystemData\SolarSystemCommunicator();
        $result = $communicator->getEarthsInSun();
        $this->assertEquals($result, $expected, 'Assert the amount of earths that can fit inside of the volume of the sun (km^3)'); 
    }

    public function getTestGetEarthsInSunData()
    {
        return array(
            array(1305704.6666758) // Volumes of earth that can fit into the sun's volume
        );
    }
}

