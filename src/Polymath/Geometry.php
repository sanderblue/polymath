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
        return $this->constants->pi() * $r * $r;
    }

    public function areaEqTriangle($b, $h)
    {
        return 0.5 * $b * $h;
    }
}