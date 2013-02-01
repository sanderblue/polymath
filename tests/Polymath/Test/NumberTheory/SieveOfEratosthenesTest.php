<?php

namespace Polymath\NumberTheory\Test;

use PHPUnit_Framework_TestCase;

class SieveOfEratosthenesTest extends PHPUnit_Framework_TestCase
{
    /**
     * @param returns an array of prime numbers up to a given number $upTo
     *
     * @dataProvider getTestSieveOfEratosthenesData
     **/
    public function testSieveOfEratosthenes($upTo, $expected)
    {
        $sieve  = new \Polymath\NumberTheory\SieveOfEratosthenes();
        $result = $sieve->getPrimes($upTo);
        $this->assertContains($result, array($expected), 'Return all prime numbers up to a given number'); 
    }

    public function getTestSieveOfEratosthenesData()
    {
        return array(
            array(7, array(2, 3, 5, 7)),
            array(15, array(2, 3, 5, 7, 11, 13))
        ); 
    }
}

