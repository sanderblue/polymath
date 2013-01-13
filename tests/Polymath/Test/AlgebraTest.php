<?php

namespace Polymath\Test;

use PHPUnit_Framework_TestCase;

class AlgebraTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTestSqrtData
     **/
    public function testSqrt($x, $expected)
    {
        $algebra = new \Polymath\Algebra();
        $result = $algebra->sqrt($x);
        $this->assertEquals($result, $expected, 'Assert the square root of x'); 
    }

    public function getTestSqrtData()
    {
        return array(
            array(1, 1),
            array(4, 2),
            array(9, 3)
        ); 
    }
}
