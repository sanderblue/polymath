<?php

namespace Polymath\Conversions\Spatial;

class CartesianToSphere
{
    /**
     * Computes the mapping from cartesian to spherical 
     * coordinates: {x,y,z} -> {rho, phi, theta} where rho 
     * is the radial distance from xyz-origin to the xyz-point, 
     * phi is the azimuth angle from the xyz-point to the 
     * positive x axis, and theta is the zenith angle from 
     * positive z axis to the xyz-point
     *
     * @param $x real x coordinate
     * @param $y real y coordinate
     * @param $z real z coordinate
     *
     * @return array containing $rho, $phi, $theta 
     **/ 
    function cartesianToSphere($x, $y, $z) { 
      $rho   = sqrt(($x * $x) + ($y * $y) + ($z * $z));
      $phi   = acos($z / sqrt(($x * $x) + ($y * $y) + ($z * $z)));
      $theta = atan($y / $x);
      return array($rho, $phi, $theta);
    }
}