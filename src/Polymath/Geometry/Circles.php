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
        return $this->constants->pi() * pow($r, 2);
    }

    // circumference 
    public function circumCircle($r)
    {
        return $this->constants->pi() * 2 * $r;
    }

    // surface area of a sphere 
    public function surfaceAreaSphere($r)
    {
        return $this->constants->pi() * 4 * pow($r, 2);
    }

    // volume of a sphere 
    public function volumeSphere($r)
    {
        return $this->constants->pi() * 4/3 * pow($r, 3);
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

    public function volumeCylinder($r, $h)
    {
        return $this->constants->pi() * pow($r, 2) * $h;
    }

    public function volumeCone($r, $h)
    {
        return $this->constants->pi() * 1/3 * pow($r, 2) * $h;
    }
}