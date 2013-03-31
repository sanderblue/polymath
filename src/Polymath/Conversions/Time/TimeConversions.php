<?php

namespace Polymath\Conversions\Time;

class TimeConversions
{
    /**
     * Years to Seconds
     **/
    public function years2Seconds($years)
    {
        return $years * 3.15569 * bcpow(10, 7);
    }

    /**
     * Years to Minutes
     **/
    public function years2Minutes($years)
    {
        return $years * 5.256 * bcpow(10, 5);
    }
}