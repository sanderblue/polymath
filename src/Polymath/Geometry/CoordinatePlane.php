<?php

namespace Polymath\Geometry;

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
     * Distance between two latitute and longitute points
     *
     * @param $lat1
     * @param $lon1
     * @param $lat2
     * @param $lon2
     * @return $d
     */
    function distanceLatLon($lat1, $lon1, $lat2, $lon2) 
    {   
        $theta = $lon1 - $lon2;   
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));   
        $dist = acos($dist);   
        $dist = rad2deg($dist);   
        $miles = $dist * 60 * 1.1515;  
            return $miles;  
    } 
}

