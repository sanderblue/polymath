<?php

namespace Polymath\Conversions\Energy\Test;

use PHPUnit_Framework_TestCase;

class EnergyTest extends PHPUnit_Framework_TestCase
{
    /**
     * Kilowatt-hours (kWh) to Joules (J)
     *
     * @dataProvider getTestKilowattHour2JoulesData
     **/
    public function testKilowattHour2Joules($kWh, $expected)
    {
        $energy = new \Polymath\Conversions\Energy\Energy();
        $result = $energy->kilowattHour2Joules($kWh);
        $this->assertEquals($result, $expected, 'Convert kilowatt hours (kWh) to Joules (J)'); 
    }

    public function getTestKilowattHour2JoulesData()
    {
        return array(
            array(1, 3.6E+6),
            array(3, 10800000)
        ); 
    }

    /**
     * Joules (J) to Kilowatt-hours (kWh)
     *
     * @dataProvider getTestJoules2KilowattHourData
     **/
    public function testJoules2KilowattHour($j, $expected)
    {
        $energy = new \Polymath\Conversions\Energy\Energy();
        $result = $energy->joules2KilowattHour($j);
        $this->assertEquals($result, $expected, 'Convert kilowatt hours (kWh) to Joules (J)'); 
    }

    public function getTestJoules2KilowattHourData()
    {
        return array(
            array(1, 2.78E-7), // 0.00000287
            array(3, 0.000000834)
        ); 
    }
}
