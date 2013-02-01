<?php

namespace Polymath\Conversions\Volume;

class Volume
{
    /**
     * Liters (L) to Gallons 
     **/
    public function liters2gallons($liters)
    {
        return $liters * 0.264;
    }

    /**
     * Gallons to Liters (L)
     **/
    public function gallons2liters($gallons)
    {
        return $gallons * 3.78541;
    }
}