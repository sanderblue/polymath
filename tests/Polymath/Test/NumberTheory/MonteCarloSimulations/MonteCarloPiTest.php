<?php

namespace Polymath\NumberTheory\MonteCarloSimulations\Test;

use PHPUnit_Framework_TestCase;

class MonteCarloPi extends PHPUnit_Framework_TestCase
{
    /**
     * Average Value of Pi using Monte Carlo Simulation
     *
     * @param $integer < 100,000
     *
     * @dataProvider getTestGetMonteCarloPiData
     **/
    public function testGetMonteCarloPi()
    {
        $monteCarlo = new \Polymath\NumberTheory\MonteCarloSimulations\MonteCarloPi();
        $result = $monteCarlo->getMonteCarloPi();
        $this->assertEquals($result, $expected, 'Assert the average value of Pi after n iterations'); 
    }

    public function getTestGetMonteCarloPiData()
    {
        // NOTE: Returned values are random and vary due to Monte Carlo predicition theory
        return testGetMonteCarloPi;
    }
}