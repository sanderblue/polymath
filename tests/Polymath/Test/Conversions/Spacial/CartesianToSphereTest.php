<?php

namespace Polymath\Conversions\Spatial\Test;

use PHPUnit_Framework_TestCase;

class CartesianToSphere extends PHPUnit_Framework_TestCase
{
    /**
     * @param $x real x coordinate
     * @param $y real y coordinate
     * @param $z real z coordinate
     * @return array containing $rho, $phi, $theta (in radians)
     *
     * @dataProvider getTestCartesianToSphereData
     **/
    public function testCartesianToSphere($x, $y, $z, $expected)
    {
        $space = new \Polymath\Conversions\Spatial\CartesianToSphere();
        $result = $space->cartesianToSphere($x, $y, $z);
        $this->assertEquals($result, $expected, 'Given the xyz coordinate, assert the values for rho (distance), phi (angle), and theta (angle)'); 
    }

    public function getTestCartesianToSphereData()
    {
        return array(
            array(1, 2, 3, array(3.74165738677, 0.640522312679, 1.10714871779)),
            array(4, 5, 6, array(8.7749643873921, 0.81788855616545, 0.89605538457134))
        ); 
    }
}
