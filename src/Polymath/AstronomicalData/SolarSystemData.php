<?php

namespace Polymath\AstronomicalData;

class SolarSystemData
{
	/**
     * Mass of the sun (kg)
     * 
     * @dataProvider getTestLightSpeedData
     **/
    public function massSun($sun)
    {
        return 1.99 * pow(10, 30);
    }

    /**
     * Surface Temperature of Earth in Kelvin(K)
     * 
     * @dataProvider getSurfaceTempEarthData
     **/
    public function surfaceTempEarth($tempEarth)
    {
        return 290;
    }
}
