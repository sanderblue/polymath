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

    /**
     * British thermal unit (Btu) to Joules (J)
     **/
    public function btu2Joules($btu)
    {
        return $btu * 1055;
    }

    /**
     * Joules to British thermal unit (Btu)
     **/
    public function joules2Btu($j)
    {
        return $j / 1055;
    }
}