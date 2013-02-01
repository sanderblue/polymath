<?php

namespace Polymath\NumberTheory;

class EquilibriumIndex
{
    public function getEquilibriums($ofThisArray) 
    {
        $count = count($ofThisArray);
        $left = 0;
        $right = array_sum($ofThisArray);
        $equilibriums = array();
        for ($i = 0; $i < $count; $i++) {
            $right -= $ofThisArray[$i]; 
            if ($left == $right) {
                $equilibriums[] = $i;
            }
            $left += $ofThisArray[$i];
        }

        return $equilibriums; 
    }
}