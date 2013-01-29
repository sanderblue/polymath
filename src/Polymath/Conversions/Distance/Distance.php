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
}