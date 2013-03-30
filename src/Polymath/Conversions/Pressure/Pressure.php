<?php

namespace Polymath\Conversions\Pressure;

class Pressure
{
    /**
     * Atmosphere (atm) to bars (b) 
     **/
    public function atm2bars($atm)
    {
        return $atm * 1.01325;
    }

    /**
     * Atmosphere (atm) to millibars
     **/
    public function atm2millibars($atm)
    {
        return $atm * 1013.25;
    }

    /**
     * Millibars to torr (Torr)
     **/
    public function millibars2torr($torr)
    {
        return $torr * 0.7500616827042;
    }
}