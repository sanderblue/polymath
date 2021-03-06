<?php

namespace Polymath\Conversions\Time\Test;

use PHPUnit_Framework_TestCase;

class TimeConverions extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTestYears2SecondsData
     **/
    public function testYears2Seconds($years, $expected)
    {
        $timeConverions = new \Polymath\Conversions\Time\TimeConversions();
        $result = $timeConverions->years2Seconds($years);
        $this->assertEquals($result, $expected, 'Convert years to seconds'); 
    }

    public function getTestYears2SecondsData()
    {
        return array(
            array(1, 31556900.0),
            array(3, 94670700.0),
            array(7, 220898300.0),
            array(22, 694251800.0)
        ); 
    }

    /**
     * @dataProvider getTestYears2MinutesData
     **/
    public function testYears2Minutes($years, $expected)
    {
        $timeConverions = new \Polymath\Conversions\Time\TimeConversions();
        $result = $timeConverions->years2Minutes($years);
        $this->assertEquals($result, $expected, 'Convert years to minutes'); 
    }

    public function getTestYears2MinutesData()
    {
        return array(
            array(1, 525600.0),
            array(3, 1576800.0),
            array(7, 3679200.0)
        ); 
    }
}