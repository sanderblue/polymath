<?php

namespace Polymath\Geometry;

use Polymath\Constants;

class Circles
{
    private $constants;

    public function __construct(Constants $constants = null) 
    {
        if ($constants === null) {
            $constants = new Constants\Constants();
        }
        $this->constants = $constants;
    }

    /**
     * Circle Calculations
     *
     * @param positive integer $r radius 
     * @return integer $a
     **/
    public function areaCircle($r)
    {
        return $this->constants->pi() * $r * $r;
    }

    // circumference 
    public function circumCircle($r)
    {
        return $this->constants->pi() * 2 * $r;
    }

    // surface area of a sphere 
    public function surfaceAreaSphere($r)
    {
        return $this->constants->pi() * 4 * $r * $r;
    }

    // volume of a sphere 
    public function volumeSphere($r)
    {
        return $this->constants->pi() * 4/3 * $r * $r * $r;
    } 

    /**
     * Cylinder Calculations
     *
     * @param positive integer $r radius $h height
     * @return integer $a
     **/
    public function surfaceAreaCylinder($r, $h)
    {
        return $this->constants->pi() * 2 * $r * $h;
    }
}