<?php

namespace Polymath\Geometry;

class Triangles
{
    /**
     * Calculate missing interior angle $c from $a and $b using interior angle sum theorem.
     *
     * @param integer $a
     * @param integer $b
     * @return integer $c
     **/
    public function calculateInteriorAngle($a, $b)
    {
        return 180 - ($a + $b); 
    }

    /**
     * Calculate the length of the hypotenuse of a right-angle triangle
     *
     * @param integer $a
     * @param integer $b
     * @return integer $c
     **/
    public function hypotRightTriangle($a, $b)
    {
        return hypot($a, $b); 
    }
}

