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
     * Joules (J) to British thermal unit (Btu)
     **/
    public function joules2btu($j)
    {
        return $j / 1055;
    }

    /**
     * Kilowatt-hours (kWh) to British thermal unit (Btu)
     **/
    public function kilowattHour2Btu($kWh)
    {
        return $kWh * 3413;
    }

    /**
     * Calorie (cal) to Joules (J)
     **/
    public function cal2Joules($cal)
    {
        return $cal * 4.184;
    }


}