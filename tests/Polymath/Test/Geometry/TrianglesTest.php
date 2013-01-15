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
        $triangles = new \Polymath\Geometry\Triangles();
        $result = $triangles->calculateInteriorAngle($a, $b);
        $this->assertEquals($result, $c, 'Assert value of the missing angle of a triangle given angles a and b of a');
    }

    public function getTestCalculateAngleData()
    {
        return array(
            array(100, 40, 40),
            array(50, 50, 80),
            array(20, 80, 80)
        );
    }

    /**
     * @dataProvider getTestHypotRightTriangleData
     */
    public function testHypotRightTriangleAngle($a, $b, $c)
    {
        $triangles = new \Polymath\Geometry\Triangles();
        $result = $triangles->hypotRightTriangle($a, $b);
        $this->assertEquals($result, $c, 'Assert value of the hypotenuse of a right triangle given sides a and b');
    }

    public function getTestHypotRightTriangleData()
    {
        return array(
            array(1, 2, 2.2360679774998),
            array(3, 4, 5.0),
            array(5, 6, 7.8102496759067)
        );
    }
}
