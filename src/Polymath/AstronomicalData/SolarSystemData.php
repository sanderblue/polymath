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
}