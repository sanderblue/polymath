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
    public function testSieveOfEratosthenes()
    {
        $sieve  = new \Polymath\NumberTheory\SieveOfEratosthenes();
        $primes = $sieve->getPrimes(420); // Will return all prime numbers up to 420
        return $primes;
    }
}

