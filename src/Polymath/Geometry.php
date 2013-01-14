<?php

namespace Polymath;

class Geometry
{
    private $constants;

    public function __construct(Constants $constants = null) 
    {
        if ($constants === null) {
            $constants = new Constants();
        }
        $this->constants = $constants;
    }

    // distance between two points on the real number line
    public function distance($x, $y)
    {
        $d = abs($x - $y);
        return $d;
    }

    public function perimeterRectangle($x, $y)
    {
        return 2 * $x + 2 * $y;
    }

    // unit sided rectangle
    public function areaSquare($x)
    {
        return $x * $x;
    }

    public function areaRectangle($x, $y)
    {
        return $x * $y;
    }

    public function areaCircle($r)
    {
        return $this->constants->pi() * $r * $r;
    }

    // circumference of a circle with radius r
    public function circumCircle($r)
    {
        return $this->constants->pi() * 2 * $r;
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