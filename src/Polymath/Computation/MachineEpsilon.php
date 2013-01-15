<?php

namespace Polymath\Computation;

class MachineEpsilon
{
    /**
    * Returns the machine epsilon value
    */
    public function machineEpsilon() 
    {
      $eps=1.0;
      while($eps+1.0 > 1.0) 
        $eps=$eps/2.0;
      $eps*=2.0;
      return $eps;
    }
}