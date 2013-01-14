<?php

namespace Polymath\Geometry;

class Trigonometry
{
	/**
     * trigonometry Calculations
     *
     * @param positive integer $b base
     * @param positive integer $h height
     **/
    public function areaEqTriangle($b, $h)
    {
        return 0.5 * $b * $h;
    }

    public function sin($x)
    {
        return sin($x);
    }

    public function cos($x)
    {
        return cos($x);
    }

    public function tan($x)
    {
        return tan($x);
    }
}