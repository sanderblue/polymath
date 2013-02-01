<?php

namespace Polymath\Conversions\Volume\Test;

use PHPUnit_Framework_TestCase;

class Volume extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTestLiters2GallonsData
     **/
    public function testLiters2Gallons($liters, $expected)
    {
        $volume = new \Polymath\Conversions\Volume\Volume();
        $result = $volume->liters2gallons($liters);
        $this->assertEquals($result, $expected, 'Convert liters to gallons'); 
    }

    public function getTestLiters2GallonsData()
    {
        return array(
            array(1, 0.264),
            array(3, 0.792),
            array(7, 1.848)
        ); 
    }

    /**
     * @dataProvider getTestGallons2LitersData
     **/
    public function testGallons2Liters($gallons, $expected)
    {
        $volume = new \Polymath\Conversions\Volume\Volume();
        $result = $volume->gallons2liters($gallons);
        $this->assertEquals($result, $expected, 'Convert gallons to liters'); 
    }

    public function getTestGallons2LitersData()
    {
        return array(
            array(1, 3.78541),
            array(3, 11.35623),
            array(7, 26.49787)
        ); 
    }
}