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
     * @param positive integer $r
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
}