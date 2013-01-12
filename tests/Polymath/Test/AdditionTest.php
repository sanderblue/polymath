<?php

namespace Polymath\Test;

use PHPUnit_Framework_TestCase;

class AdditionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTestAddData
     **/
    public function testAdd($x, $y, $expected)
    {
        $addition = new \Polymath\Addition();
        $result = $addition->add($x, $y);
        $this->assertEquals($expected, $result, 'Assert the sum of x and y'); 
    }

    public function getTestAddData()
    {
        return array(
            array(1, 1, 2),
            array(2, 2, 4)
        ); 
    }
}
