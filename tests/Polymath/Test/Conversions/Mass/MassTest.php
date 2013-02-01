<?php

namespace Polymath\Conversions\Mass\Test;

use PHPUnit_Framework_TestCase;

class Mass extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTestKilograms2PoundsData
     **/
    public function testKilograms2Pounds($kg, $expected)
    {
        $mass = new \Polymath\Conversions\Mass\Mass();
        $result = $mass->kilograms2pounds($kg);
        $this->assertEquals($result, $expected, 'Convert kilograms to pounds'); 
    }

    public function getTestKilograms2PoundsData()
    {
        return array(
            array(1, 2.20462),
            array(3, 6.61386),
            array(22, 48.50164)
        ); 
    }

    /**
     * @dataProvider getTestPounds2KilogramsData
     **/
    public function testPounds2Kilograms($lb, $expected)
    {
        $mass = new \Polymath\Conversions\Mass\Mass();
        $result = $mass->pounds2kilograms($lb);
        $this->assertEquals($result, $expected, 'Convert pounds to kilograms'); 
    }

    public function getTestPounds2KilogramsData()
    {
        return array(
            array(1, 0.453592),
            array(3, 1.360776),
            array(22, 9.979024)
        ); 
    }

    /**
     * @dataProvider getTestPounds2OzData
     **/
    public function testPounds2Oz($lb, $expected)
    {
        $mass = new \Polymath\Conversions\Mass\Mass();
        $result = $mass->pounds2oz($lb);
        $this->assertEquals($result, $expected, 'Convert pounds to ounces'); 
    }

    public function getTestPounds2OzData()
    {
        return array(
            array(1, 16),
            array(2, 32)
        ); 
    }

    /**
     * @dataProvider getTestOz2PoundsData
     **/
    public function testOz2Pounds($oz, $expected)
    {
        $mass = new \Polymath\Conversions\Mass\Mass();
        $result = $mass->oz2pounds($oz);
        $this->assertEquals($result, $expected, 'Convert ournces to pounds'); 
    }

    public function getTestOz2PoundsData()
    {
        return array(
            array(1, 0.0625),
            array(8, 0.5),
            array(16, 1)
        ); 
    }

    /**
     * @dataProvider getTestOz2GramsData
     **/
    public function testOz2Grams($oz, $expected)
    {
        $mass = new \Polymath\Conversions\Mass\Mass();
        $result = $mass->oz2grams($oz);
        $this->assertEquals($result, $expected, 'Convert ounces to grams'); 
    }

    public function getTestOz2GramsData()
    {
        return array(
            array(0.125, 3.5436875),
            array(0.5, 14.17475),
            array(1, 28.3495)
        ); 
    }

    /**
     * @dataProvider getTestGrams2OzData
     **/
    public function testGrams2Oz($grams, $expected)
    {
        $mass = new \Polymath\Conversions\Mass\Mass();
        $result = $mass->grams2oz($grams);
        $this->assertEquals($result, $expected, 'Convert grams to ounces'); 
    }

    public function getTestGrams2OzData()
    {
        return array(
            array(3.5, 0.123459),
            array(7, 0.246918),
            array(14, 0.493836)
        ); 
    }
}