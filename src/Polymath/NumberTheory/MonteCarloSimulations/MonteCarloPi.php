<?php

namespace Polymath\NumberTheory\MonteCarloSimulations;

class MonteCarloPi
{
    /**
     * Average value of Pi using Monte Carlo method and PHP
     *
     * The Monte Carlo method provides an approximate result due to probabilities 
     * used in the related theoretical calculus. This is an exercise and returned values
     * do not reflect the actual value of Pi. Think of Pi as any variable you would like to 
     * predict. The more this functions generates numbers, the more the result of Pi is precise.
     *
     * @param $integer < 100,000
     **/
    public function getMonteCarloPi($integer)
    {
    $circle = 0.01; 
    $square = 0.00001; // dividing by zero
        $i = 0;
        // number of iterations
        while ($i <= $integer) {
            $x = rand(0, 30);
            $y = rand(0, 30);
            $distance = sqrt(pow($x, 2)+ pow($y, 2));

            if ($distance <= 1.0) {
            $circle = $circle + 1;
            }
    
            // and else...
            if ($distance <= sqrt(2.0)) {
            $square = $square + 1;
            }
        
            $i = $i + 1;
            }
    
        $pi = 4 * $circle / $square;
        return $pi;
    }
}
