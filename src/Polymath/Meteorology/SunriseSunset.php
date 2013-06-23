<?php

namespace Polymath\Meteorology;

use Polymath\Geometry\Trigonometry;

/**
 * @author This class is under construction... stay tuned.
 *
 *
 **/

//return sine of <an angle in degrees>
function sind($degrees) {
    return sin(deg2rad($degrees));
}

//etc
function cosd($degrees) {
    return cos(deg2rad($degrees));
}

function tand($degrees) {
    return tan(deg2rad($degrees));
}

function atand($x) {
    return rad2deg(atan($x));
}

function asind($x) {
    return rad2deg(asin($x));
}

function acosd($x) {
    return rad2deg(acos($x));
}

class SunriseSunset
{
    public function sunrise($date, $timezone, $latitude, $longitude, $zenith)
    {
        // calculate day of year
        $n=(int)date("z", $date);

        // convert longitude to hour value and calculate an approximate time
        $lnghour = $longitude / 15;
        $t = $n + ((6 - $lnghour) / 24);

        // calculate the sun's mean anomaly
        $m = (0.9856 * $t) - 3.289;

        // calculate the sun's true longitude
        $l = $m + (1.916 * sind($m)) + (0.020 * sind(2 * $m)) + 282.634;
        $l = fmod($l, 360);

        // calculate the sun's right ascension
        $ra = atand(0.91764 * tand($l));
        $ra = fmod($ra, 360);

        // right ascension needs to be in the same quadrant as $l (sun's true longitude)
        $lquadrant = floor($l / 90) * 90;
        $raquadrant = floor($ra / 90) * 90;
        $ra = $ra + ($lquadrant - $raquadrant);
        unset($lquadrant); //temporary variable, not needed anymore
        unset($raquadrant); //temporary variable, not needed anymore

        // right ascension value needs to be converted into hours
        $ra = $ra / 15;

        // calculate sun's declination
        $sindec = 0.39782 * sind($l);
        $cosdec = cosd(asind($sindec));

        // calculate the sun's local hour angle
        $cosh = (cosd($zenith) - ($sindec * sind($latitude))) / ($cosdec * cosd($latitude));
        if ($cosh > 1) {
            return NULL; // sun does not rise at this location on the specified date
        }

        // finish calculating H and convert into hours
        $h = 360 - acosd($cosh);
        $h = $h / 15;

        // calculate local mean time of rising
        $t = $h + $ra - (0.06571 * $t) - 6.622;

        // adjust back to UTC
        $ut = $t - $lnghour;
        $ut = fmod($ut, 24);

        // convert UTC to local time zone of latitude/longitude
        $localt = $ut + $timezone;

        // calculation finished, return result as a unix date
        return $date + $localt * 60 * 60;
    }

    public function sunset($date, $timezone, $latitude, $longitude, $zenith)
    {
        // calculate day of year
        $n = (int)date("z", $date);

        // convert longitude to hour value and calculate an approximate time
        $lnghour = $longitude / 15;
        $t = $n + ((18 - $lnghour) / 24);

        // calculate the sun's mean anomaly
        $m = (0.9856 * $t) - 3.289;

        // calculate the sun's true longitude
        $l = $m + (1.916 * sind($m)) + (0.020 * sind(2 * $m)) + 282.634;
        $l = fmod($l, 360);

        // calculate the sun's right ascension
        $ra = atand(0.91764*tand($l));
        $ra = fmod($ra, 360);

        // right ascension needs to be in the same quadrant as $l (sun's true longitude)
        $lquadrant = floor($l / 90) * 90;
        $raquadrant = floor($ra / 90) * 90;
        $ra = $ra + ($lquadrant - $raquadrant);
        unset($lquadrant); //temporary variable, not needed anymore
        unset($raquadrant); //temporary variable, not needed anymore

        // right ascension value needs to be converted into hours
        $ra = $ra / 15;

        // calculate sun's declination
        $sindec = 0.39782 * sind($l);
        $cosdec = cosd(asind($sindec));

        // calculate the sun's local hour angle
        $cosh = (cosd($zenith) - ($sindec * sind($latitude))) / ($cosdec * cosd($latitude));
        if ($cosh < -1) {
            return NULL; //sun does not set at this location on the specified date
        }

        // finish calculating H and convert into hours
        $h = acosd($cosh);
        $h = $h/15;

        // calculate local mean time of rising
        $t = $h + $ra - (0.06571 * $t) - 6.622;

        // adjust back to UTC
        $ut = $t - $lnghour;
        $ut = fmod($ut, 24);

        // convert UTC to local time zone of latitude/longitude
        $localt = $ut + $timezone;

        //calculation finished, return result as a unix date
        return $date + $localt * 60 * 60;
    }
}
