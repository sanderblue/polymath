<?php

namespace Polymath\Physics;

class Carnot
{
    /**
     * Carnot Efficiency 
     *
     * Carnot's contribution was to show that for an ideal engine the ratio of two energy terms
     * is identical to the ratio of two temperature terms. (Q_c / Q_h) = (T_c / T_h) in terms of Kelvin
     *
     * @param $T_c = cold temperature
     * @param $T_h = hot temperature
     * @param 100 = in terms of percent (%)
     *
     **/
    public function getCarnot($T_c, $T_h) 
    {
      $carnot = ((1 - $T_c / $T_h) * 100);
      return $carnot;
    }
}