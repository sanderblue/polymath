<?php

namespace Polymath\AstronomicalData;

class FundamentalConstants
{
    public function getLightSpeed($c)
    {
        return 3.00 * pow(10, 8);
    }

    public function getPlancksConstant($h)
    {
        return 6.63 * pow(10, -34);
    }

    public function getAvogadro()
    {
        return 6.023E+23;
    }

    public function getEarthGravity()
    {
        return 9.81; // in meters per second squared 
    }
}
