<?php

namespace Polymath\GeometryTest;

use PHPUnit_Framework_TestCase;
use Polymath\Geometry\Triangles;

class TrianglesTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTestCalculateAngleData
     */
    public function testCalculateInteriorAngle($a, $b, $c)
    {
        $triangles = new Triangles();
        $this->assertEquals($c, $triangles->calculateInteriorAngle($a, $b));
    }

    public function getTestCalculateAngleData()
    {
        return array(
            array(100, 40, 40),
            array(50, 50, 80),
            array(20, 80, 80)
        );
    }
}
