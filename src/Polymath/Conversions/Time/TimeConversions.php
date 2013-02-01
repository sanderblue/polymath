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
}