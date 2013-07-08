<?php

namespace Polymath\Physics\FundamentalConstants;

class FundamentalConstants
{
    public function getLightSpeed($c)
    {
        return 2.99792458 * bcpow(10, 8);
    }

    public function getPlancksConstant($h)
    {
        return 6.62606957 * bcpow(10, -34);
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
