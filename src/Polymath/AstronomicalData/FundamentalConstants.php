<?php

namespace Polymath\AstronomicalData;

class FundamentalConstants
{
    public function lightSpeed($c)
    {
        return 3.00 * pow(10, 8);
    }

    public function plancksConstant($h)
    {
        return 6.63 * pow(10, -34);
    }

    public function avogadro($n)
    {
        return 6.023E+23;
    }

    public function gravity($g)
    {
        return 9.81; // in meters per second squared 
    }
}
