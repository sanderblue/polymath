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
}