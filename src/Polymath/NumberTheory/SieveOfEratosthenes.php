<?php

namespace Polymath\NumberTheory;

class SieveOfEratosthenes 
{
    /**
     * Prime Numbers (my favorite)
     *
     * This class uses the sieve of Eratosthenes to find prime numbers
     *
     * The National Institute of Standards and Technology (NIST) defines the Sieve of Eratosthenes as follows:
     *
     * Definition: An algorithm to find all prime numbers up to a certain N. 
     * Begin with an (unmarked) array of integers from 2 to N. The first unmarked integer, 2, 
     * is the first prime. Mark every multiple of this prime. Repeatedly take 
     * the next unmarked integer as the next prime and mark every multiple of the prime.
     *
     * Ported from publicly provided code by NIST (thanks scientists)
     * @see http://xlinux.nist.gov/dads/HTML/sieve.html
     */
    public function getPrimes($upTo) 
    {
        if ($upTo > 0) {
        $size   = $upTo + 1;
        $flags  = array();
        $primes = array();
        $limit  = sqrt($size);
  
        // Set flags to start off
        for ($i = 2; $i < $size; $i++) 
            $flags[$i] = true;
  
        // Cross out multiples of 2
        $j = 2;
        for ($i = $j + $j; $i < $size; $i = $i + $j) 
            $flags[$i] = false;
  
        // Cross out multiples of odd numbers
        for ($j = 3; $j <= $limit; $j = $j + 2) {
            if ($flags[$j]) {
                for ($i = $j + $j; $i < $size; $i = $i + $j) 
            $flags[$i] = false;
            }
        }
  
       // Build list of primes from what is left
       for ($i = 2; $i < $size; $i++) {
         if ($flags[$i]) 
           $primes[] = $i;
        }
  
        return $primes;

    } else     
      die("n must be greater than 0."); 
    }
}

