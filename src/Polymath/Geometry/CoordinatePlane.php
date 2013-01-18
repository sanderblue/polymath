<?php

namespace Polymath\Geometry;

class CoordinatePlane
{
    /**
     * Distance between two points on the real number line
     *
     * @param $x
     * @param $y
     * @return $d
     */
    public function distance($x, $y)
    {
        $d = abs($x - $y);
        return $d;
    }
}

