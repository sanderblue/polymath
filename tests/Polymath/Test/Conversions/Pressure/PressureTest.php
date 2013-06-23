<?php

namespace Polymath\Conversions\Pressure\Test;

use PHPUnit_Framework_TestCase;

class Volume extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTestAtm2BarsData
     **/
    public function testAtm2Bars($bars, $expected)
    {
        $pressure = new \Polymath\Conversions\Pressure\Pressure();
        $result = $pressure->atm2bars($bars);
        $this->assertEquals($result, $expected, 'Convert atmospheric pressure to bars.');
    }

    public function getTestAtm2BarsData()
    {
        return array(
            array(1, 1.01325),
            array(3, 3.03975),
            array(7, 7.09275)
        );
    }

    /**
     * @dataProvider getTestAtm2MillibarsData
     **/
    public function testAtm2Millibars($millibars, $expected)
    {
        $pressure = new \Polymath\Conversions\Pressure\Pressure();
        $result = $pressure->atm2millibars($millibars);
        $this->assertEquals($result, $expected, 'Convert atmospheric pressure to millibars.');
    }

    public function getTestAtm2MillibarsData()
    {
        return array(
            array(1, 1013.25),
            array(3, 3039.75),
            array(7, 7092.75)
        );
    }

    /**
     * @dataProvider getTestMillibars2TorrData
     **/
    public function testMillibars2Torr($torr, $expected)
    {
        $pressure = new \Polymath\Conversions\Pressure\Pressure();
        $result = $pressure->millibars2torr($torr);
        $this->assertEquals($result, $expected, 'Convert millibars to torr.');
    }

    public function getTestMillibars2TorrData()
    {
        return array(
            array(1, 0.7500616827042),
            array(1013, 759.81248457935),
        );
    }

    /**
     * @dataProvider getTestTorr2MillibarsData
     **/
    public function testTorr2Millibars($millibars, $expected)
    {
        $pressure = new \Polymath\Conversions\Pressure\Pressure();
        $result = $pressure->torr2millibars($millibars);
        $this->assertEquals($result, $expected, 'Convert torr to millibars.');
    }

    public function getTestTorr2MillibarsData()
    {
        return array(
            array(1, 1.33322368),
            array(1013, 1350.55558784)
        );
    }

    /**
     * @dataProvider getTestPsf2PsiData
     **/
    public function testPsf2Psi($psi, $expected)
    {
        $pressure = new \Polymath\Conversions\Pressure\Pressure();
        $result = $pressure->psf2psi($psi);
        $this->assertEquals($result, $expected, 'Convert pounds per square foot (psf) to pounds per square inch (psi).');
    }

    public function getTestPsf2PsiData()
    {
        return array(
            array(1, 0.006944444444444),
            array(100, 0.6944444444444)
        );
    }

    /**
     * @dataProvider getTestPsi2PsfData
     **/
    public function testPsi2Psf($psf, $expected)
    {
        $pressure = new \Polymath\Conversions\Pressure\Pressure();
        $result = $pressure->psi2psf($psf);
        $this->assertEquals($result, $expected, 'Convert pounds per square foot (psf) to pounds per square inch (psi).');
    }

    public function getTestPsi2PsfData()
    {
        return array(
            array(1, 144),
            array(45, 6480),
            array(100, 14400)
        );
    }
}