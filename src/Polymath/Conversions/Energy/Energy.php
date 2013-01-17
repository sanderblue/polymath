<?php

namespace Polymath\Conversions\Energy;

class Energy
{
	/**
     * Kilowatt-hours (kWh) to Joules (J)
     **/
    public function kilowattHour2Joules($kWh)
    {
        return $kWh * 3.6 * pow(10, 6);
    }

    /**
     * Joules (J) to Kilowatt-hours (kWh)
     **/
    public function joules2KilowattHour($j)
    {
        return $j * 2.78 * pow(10, -7);
    }
}