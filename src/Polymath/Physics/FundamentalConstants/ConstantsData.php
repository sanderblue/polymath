<?php

namespace Polymath\Physics\FundamentalConstants;

class ConstantsData
{
    public function getAtomicMassUnit()
    {
        return 1.66 * pow(10, -27); // kilograms (kg)
    }

    public function getProtonMass()
    {
        return 1.673 * pow(10, -27); // kilograms (kg)
    }

    public function getNeutronMass()
    {
        return 1.675 * pow(10, -27); // kilograms (kg)
    }

    public function getElectronMass()
    {
        return 9.109 * pow(10, -31); // kilograms (kg)
    }

    public function getDeuteronMass()
    {
        return 3.34 * pow(10, -27); // kilograms (kg)
    }

    // public function getAlphaParticleMass()
    // {
    //     return 6.64 * pow(10, -27); // kilograms (kg)
    // }
}
