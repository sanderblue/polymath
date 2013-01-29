<?php

namespace Polymath\Geometry;

use Polymath\Conversions\Distance;

class CoordinatePlane
{
    /**
     * Distance between two points on the real number line
     *
     * @param $x
     * @param $y
     * @return $d
     */
    public function distance($x, $y)
    {
        $d = abs($x - $y);
        return $d;
    }

    /**
     * Distance between two latitute and longitute points in miles
     * Uses Decimal Degrees for calculation
     * Single Coordinate Example: 32.30642° N 122.61458° W = +32.30642, -122.61458 
     *
     * @param $lat1 
     * @param $lon1
     * @param $lat2
     * @param $lon2
     * @return $d
     */
    public function distanceLatLon($lat1, $lon1, $lat2, $lon2) 
    {   
        $theta = $lon1 - $lon2;   
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));   
        $dist = acos($dist);   
        $dist = rad2deg($dist);   
        $miles = $dist * 60 * 1.1515; 
            return $miles;  
    } 
}

