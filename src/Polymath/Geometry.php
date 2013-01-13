<?php

namespace Polymath;

class Geometry
{
    public function perimeterRectangle($x, $y)
    {
        return 2 * $x + 2 * $y;
    }

    public function areaSquare($x, $y)
    {
        return $x * $y;
    }

    public function areaRectangle($x, $y)
    {
        return $x * $y;
    }

    public function areaCircle($r)
    {
        return pi() * $r * $r;
    }
}
