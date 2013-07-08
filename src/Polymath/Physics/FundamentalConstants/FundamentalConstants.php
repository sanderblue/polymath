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

    public function getPlanckLength($p)
    {
        return 1.616199 * bcpow(10, -35);
    }

    public function getAvogadro()
    {
        return 6.023E+23;
    }

    public function getGravitationalConstant($G)
    {
        return 6.67384 * bcpow(10, -11); // m^3 kg/1 s/2
    }

    public function getEarthGravity($g)
    {
        return 9.81; // in meters per second squared
    }
}
