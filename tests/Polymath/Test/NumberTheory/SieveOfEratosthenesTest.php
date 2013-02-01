<?php

namespace Polymath\NumberTheory\Test;

use PHPUnit_Framework_TestCase;

class SieveOfEratosthenesTest extends PHPUnit_Framework_TestCase
{
    /**
     * @author Still needs proper unit test, but this works for now
     *
     * @dataProvider getTestSieveOfEratosthenesData
     **/
    public function testSieveOfEratosthenes($upTo, $expected)
    {
        $sieve  = new \Polymath\NumberTheory\SieveOfEratosthenes();
        $result = $sieve->getPrimes($upTo); // Will return all prime numbers up to 420
        $this->assertContains($result, array($expected), 'Return the primes up to a provided number'); 
    }

    public function getTestSieveOfEratosthenesData()
    {
        return array(
            array(7, $expected = array(2, 3, 5, 7)),
            array(15, $expected = array(2, 3, 5, 7, 11, 13))
        ); 
    }
}

