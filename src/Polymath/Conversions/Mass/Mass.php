<?php

namespace Polymath\Conversions\Mass;

class Mass
{
    /**
     * Kilograms (kg) to Pounds (lb)
     **/
    public function kilograms2pounds($kg)
    {
        return $kg * 2.20462;
    }

    /**
     * Pounds (lb) to Kilograms (kg)
     **/
    public function pounds2kilograms($lb)
    {
        return $lb * 0.453592;
    }

    /**
     * Pounds (lb) to Ounces (oz)
     **/
    public function pounds2oz($lb)
    {
        return $lb * 16;
    }

    /**
     * Ounces (oz) to Pounds (lb)
     **/
    public function oz2pounds($oz)
    {
        return $oz * 0.0625;
    }

    /**
     * Ounces (oz) to grams (g)
     **/
    public function oz2grams($oz)
    {
        return $oz * 28.3495;
    }

    /**
     * Grams (g) to Ounces (oz)
     **/
    public function grams2oz($gram)
    {
        return $gram * 0.035274;
    }
}