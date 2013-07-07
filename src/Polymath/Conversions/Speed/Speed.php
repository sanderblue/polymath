<?php

namespace Polymath\Conversions\Speed;

class Speed
{
    /**
     * Speed of sound (at standard atmospheric pressure) to miles per hour (mph)
     **/
    public function speedOfSound2Mph($mph)
    {
        return $mph * 767.2691481747;
    }

    /**
     * Speed of light (at standard atmospheric pressure) in meters/second (m/s)
     **/
    public function speedOfLight2MetersPerSecond($metersPerSecond)
    {
        return $metersPerSecond * 299792458; // 299,792,458
    }
}