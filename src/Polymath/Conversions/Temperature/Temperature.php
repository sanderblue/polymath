<?php

namespace Polymath\Conversions\Temperature;

class Temperature
{
    /**
     * Celsius to Fahrenheit
     **/
    public function Celsius2Fahrenheit($temp)
    {
        return (9 / 5) * $temp + 32;
    }

    /**
     * Years to Minutes
     **/
    public function Fahrenheit2Celsius($temp)
    {
        return (5 / 9) * ($temp - 32);
    }
}