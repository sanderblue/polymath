<?php

namespace Polymath\Geometry\Test;

use PHPUnit_Framework_TestCase;

class CirclesTest extends PHPUnit_Framework_TestCase  
{  
    /**
     * @dataProvider getTestCircumCircleData
     **/
    public function testCircumCircle($r, $expected)
    {
        $geometry = new \Polymath\Geometry\Circles();
        $result = $geometry->circumCircle($r);
        $this->assertEquals($result, $expected, 'Assert the circumference of a circle with radius r'); 
    }

    public function getTestCircumCircleData()
    {
        return array(
            array(1, 6.28318530718),
            array(2, 12.5663706144),
            array(3, 18.8495559215)
        ); 
    }

    /**
     * @dataProvider getTestAreaCircleData
     **/
    public function testAreaCircle($r, $expected)
    {
        $geometry = new \Polymath\Geometry\Circles();
        $result = $geometry->areaCircle($r);
        $this->assertEquals($result, $expected, 'Assert the area of a circle with r radius'); 
    }

    public function getTestAreaCircleData()
    {
        // With a given radius, assert the area of a cirle
        return array(
            array(1, 3.1415926535898),
            array(2, 12.5663706144)
        ); 
    }

    /**
     * @dataProvider getTestSurfaceAreaSphereData
     **/
    public function testSurfaceAreaSphere($r, $expected)
    {
        $geometry = new \Polymath\Geometry\Circles();
        $result = $geometry->surfaceAreaSphere($r);
        $this->assertEquals($result, $expected, 'Assert the area of a circle with r radius'); 
    }

    public function getTestSurfaceAreaSphereData()
    {
        // With a given radius, assert the area of a cirle
        return array(
            array(1, 12.5663706144),
            array(2, 50.2654824574)
        ); 
    }

    /**
     * @dataProvider getTestVolumeSphereData
     **/
    public function testVolumeSphere($r, $expected)
    {
        $geometry = new \Polymath\Geometry\Circles();
        $result = $geometry->volumeSphere($r);
        $this->assertEquals($result, $expected, 'Assert the area of a circle with r radius'); 
    }

    public function getTestVolumeSphereData()
    {
        // With a given radius, assert the area of a cirle
        return array(
            array(1, 4.18879020479),
            array(2, 33.5103216383)
        ); 
    }
}
