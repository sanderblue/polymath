<?php

namespace Polymath\Geometry;

class Polygons
{
    public function perimeterRectangle($x, $y)
    {
        return 2 * $x + 2 * $y;
    }

    // area of a unit sided rectangle
    public function areaSquare($x)
    {
        return $x * $x;
    }

    public function areaRectangle($x, $y)
    {
        return $x * $y;
    }
    
    public function areaTrapezoid($b1, $b2, $h)
    {
        return $b1 + $b2 / 2 * $h;
    }

    /**
     * Compute the area of the specfied polygon on an XY Coordinate Plane
     *
     * @param array $x = x coordinates of a polygon
     * @param array $y = y coordinates of a polygon   
     *
     * @return float area of specified polygon
     */
    public function areaPolygon($x, $y) 
    {    
        $n = count($x); 
        $area  = 0.0;  
        for ($i = 0; $i < $n - 1; $i++)
            $area += ($x[$i] * $y[$i + 1]) - ($x[$i + 1] * $y[$i]);    
            $area += ($x[$n - 1] * $y[0]) - ($x[0] * $y[$n - 1]);    
            $area *= 0.5;  
        return $area;
    }
}
