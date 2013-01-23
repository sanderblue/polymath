<?php

namespace Polymath\NumberTheory\Test;

use PHPUnit_Framework_TestCase;

class EquilibriumIndex extends PHPUnit_Framework_TestCase
{
    /**
     * Equilibrium indexes of an array
     *
     * @dataProvider getTestGetEquilibriumsData
     **/
    public function testGetEquilibriums($ofThisArray, $expected)
    {
        $ofThisArray = array(-7, 1, 5, 2, -4, 3, 0);
        $equilbriums = new \Polymath\NumberTheory\EquilibriumIndex();
        $result = $equilbriums->getEquilibriums($ofThisArray);
        $this->assertEquals($result, $expected, 'Assert the equilibrium indexes of the given array'); 
    }

    public function getTestGetEquilibriumsData()
    {
        return testGetEquilibriums; // returns Array ( [0] => 3 [1] => 6 )
    }
}