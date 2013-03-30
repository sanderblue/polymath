<?php

namespace Polymath\Conversions\Pressure;

class Pressure
{
    /**
     * Atmosphere (atm) to bars (b) 
     **/
    public function atm2bars($bars)
    {
        return $bars * 1.01325;
    }

    /**
     * Atmosphere (atm) to millibars (mb)
     **/
    public function atm2millibars($millibars)
    {
        return $millibars * 1013.25;
    }
}