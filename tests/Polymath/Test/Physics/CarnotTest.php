<?php

namespace Polymath\Physics\Test;

use PHPUnit_Framework_TestCase;

class CarnotTest extends PHPUnit_Framework_TestCase
{
    /**
     * Carnot Efficiency 
     *
     * Carnot's contribution was to show that for an ideal engine the ratio of two energy terms
     * is identical to the ratio of two temperature terms. (Q_c / Q_h) = (T_c / T_h) in terms of Kelvin
     *
     * Efficiency (Carnot) = (1 - TempCold / TempHot) * 100% 
     *
     * @param $T_c = cold temperature
     * @param $T_h = hot temperature
     * @param 100 = in terms of percent (%)
     *
     * @dataProvider getTestGetCarnotData
     **/
    public function testGetCarnot($T_c, $T_h, $expected)
    {
        $carnot = new \Polymath\Physics\Carnot();
        $result = $carnot->getCarnot($T_c, $T_h);
        $this->assertEquals($result, $expected, 'Assert the Carnot efficiency (%) of the given parameters'); 
    }

    public function getTestGetCarnotData()
    {
        return array(
            array(300, 825, 63.636363636364)
        ); 
    }
}