<?php

namespace Polymath\Computation\Test;

use PHPUnit_Framework_TestCase;

class MachineEpsilonTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTestGetMachineEpsilonData
     **/
    public function testGetMachineEpsilon($x, $expected)
    {
        $computation = new \Polymath\Computation\MachineEpsilon();
        $result = $computation->getMachineEpsilon($x);
        $this->assertEquals($result, $expected, 'Assert machine epsilon value'); 
    }

    public function getTestGetMachineEpsilonData()
    {
        return array(
            array(2.2204460492503E-16, 2.2204460492503E-16)
        ); 
    }
}