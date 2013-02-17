<?php

namespace Polymath\Physics\FundamentalConstants\Test;

use PHPUnit_Framework_TestCase;

class ConstantsDataTest extends PHPUnit_Framework_TestCase
{
    /**
     * Atomic Mass Unit 
     * 
     * @dataProvider getTestGetAtomicMassUnitData
     **/
    public function testGetAtomicMassUnit($amu, $expected)
    {
        $constantsData = new \Polymath\Physics\FundamentalConstants\ConstantsData();
        $result = $constantsData->getAtomicMassUnit($amu);
        $this->assertEquals($result, $expected, 'Assert the mass of a proton in kilograms (kg)'); 
    }

    public function getTestGetAtomicMassUnitData()
    {
        return array(
            array(1.66E-27, 1.66E-27)
        ); 
    }

    /**
     * Proton Mass
     * 
     * @dataProvider getTestGetProtonMassData
     **/
    public function testGetProtonMass($proton, $expected)
    {
        $constantsData = new \Polymath\Physics\FundamentalConstants\ConstantsData();
        $result = $constantsData->getProtonMass($proton, $expected);
        $this->assertEquals($result, $expected, 'Assert the mass of a proton in kilograms (kg)'); 
    }

    public function getTestGetProtonMassData()
    {
        return array(
            array(1.673E-27, 1.673E-27)
        ); 
    }

    /**
     * Neutron Mass
     * 
     * @dataProvider getTestGetNeutronMassData
     **/
    public function testGetNeutronMass($neutron, $expected)
    {
        $constantsData = new \Polymath\Physics\FundamentalConstants\ConstantsData();
        $result = $constantsData->getNeutronMass($neutron, $expected);
        $this->assertEquals($result, $expected, 'Assert the mass of a neutron in kilograms (kg)'); 
    }

    public function getTestGetNeutronMassData()
    {
        return array(
            array(1.675E-27, 1.675E-27)
        ); 
    }

    /**
     * Electron Mass
     * 
     * @dataProvider getTestGetElectronMassData
     **/
    public function testGetElectronMass($electron, $expected)
    {
        $constantsData = new \Polymath\Physics\FundamentalConstants\ConstantsData();
        $result = $constantsData->getElectronMass($electron, $expected);
        $this->assertEquals($result, $expected, 'Assert the mass of an electron in kilograms (kg)'); 
    }

    public function getTestGetElectronMassData()
    {
        return array(
            array(9.109E-31, 9.109E-31)
        ); 
    }

    /**
     * Deuteron Mass
     * 
     * @dataProvider getTestGetDeuteronMassData
     **/
    public function testGetDeuteronMass($deuteron, $expected)
    {
        $constantsData = new \Polymath\Physics\FundamentalConstants\ConstantsData();
        $result = $constantsData->getDeuteronMass($deuteron, $expected);
        $this->assertEquals($result, $expected, 'Assert the mass of a deuteron in kilograms (kg)'); 
    }

    public function getTestGetDeuteronMassData()
    {
        return array(
            array(3.34E-27, 3.34E-27)
        ); 
    }

    /**
     * Alpha Particle Mass
     * 
     * @dataProvider getTestGetAlphaParticleMassData
     **/
    public function testGetAlphaParticleMass($alpha, $expected)
    {
        $constantsData = new \Polymath\Physics\FundamentalConstants\ConstantsData();
        $result = $constantsData->getAlphaParticleMass($alpha, $expected);
        $this->assertEquals($result, $expected, 'Assert the mass of an alpha particle in kilograms (kg)'); 
    }

    public function getTestGetAlphaParticleMassData()
    {
        return array(
            array(6.64E-27, 6.64E-27)
        ); 
    }
}
