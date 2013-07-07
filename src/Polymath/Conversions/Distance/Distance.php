<?php

namespace Polymath\Conversions\Distance;

class Distance
{
    public function mi2km($mi = null)
    {
        return $mi * 1.609344;
    }

    public function km2mi($km)
    {
        return $km * 0.621371;
    }

    public function meters2feet($m)
    {
        return $m * 3.28;
    }

    public function feet2meters($ft)
    {
        return $ft / 3.28;
    }

    public function meters2yards($m)
    {
        return $m * 1.09361;
    }

    public function yards2meters($yd)
    {
        return $yd * 0.9144;
    }

    public function lightyear2miles($ly)
    {
        return $ly * 5.87849981 * bcpow(10, 12);
    }
}