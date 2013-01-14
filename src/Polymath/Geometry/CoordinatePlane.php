<?php

namespace Polymath\Geometry;

class CoordinatePlane
{
	// distance between two points on the real number line
    public function distance($x, $y)
    {
        $d = abs($x - $y);
        return $d;
    }
}
