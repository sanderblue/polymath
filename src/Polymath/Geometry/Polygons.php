<?php

namespace Polymath\Geometry;

class Polygons
{
    public function perimeterRectangle($x, $y)
    {
        return 2 * $x + 2 * $y;
    }

    // area of a unit sided rectangle
    public function areaSquare($x)
    {
        return $x * $x;
    }

    public function areaRectangle($x, $y)
    {
        return $x * $y;
    }

    // unit side triangle
    public function areaEqTriangle($b, $h)
    {
        return 0.5 * $b * $h;
    }
    
    public function areaTrapezoid($b1, $b2, $h)
    {
        return $b1 + $b2 / 2 * $h;
    }
}