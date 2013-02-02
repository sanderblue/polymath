<?php

namespace Polymath\Geometry;

class Trigonometry
{
    /**
     * Trigonometry Identities
     **/
	public function fundamentalIdentity($a)
    {
        return sin($a) * sin($a) + cos($a) * cos($a); // equals 1
    }

    /**
     * Trigonometry Calculations
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

    // return sine of an angle in degrees, and so on... see below.
    public function sind($degrees) 
    {
        return sin(deg2rad($degrees));
    }

    public function cosd($degrees) {
        return cos(deg2rad($degrees));
    }
    
    public function tand($degrees) {
        return tan(deg2rad($degrees));
    }
    
    public function atand($x) {
        return rad2deg(atan($x));
    }
    
    public function asind($x) {
        return rad2deg(asin($x));
    }
    
    public function acosd($x) {
        return rad2deg(acos($x));
    }
}
