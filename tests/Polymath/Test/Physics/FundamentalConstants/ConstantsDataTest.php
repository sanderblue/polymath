<?php

namespace Polymath\Physics\FundamentalConstants\Test;

use PHPUnit_Framework_TestCase;

class ConstantsDataTest extends PHPUnit_Framework_TestCase
{
    /**
     * Proton Mass
     * 
     * @dataProvider getTestGetProtonMassData
     **/
    public function testGetProtonMass($proton, $expected)
    {
        $constantsData = new \Polymath\Physics\FundamentalConstants\ConstantsData();
        $result = $constantsData->getProtonMass($proton, $expected);
        $this->assertEquals($result, $expected, 'Assert the speed of light c in meters per second'); 
    }

    public function getTestGetProtonMassData()
    {
        return array(
            array(1.673E-27, 300000000)
        ); 
    }
}
