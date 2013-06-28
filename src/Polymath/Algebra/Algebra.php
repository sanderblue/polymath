<?php

namespace Polymath\Algebra;

class Algebra
{
    public function exp($e)
    {
        return exp($e);
    }

    public function square($x)
    {
        return pow($x, 2);
    }

    public function cubed($x)
    {
        return pow($x, 3);
    }

    public function sqrt($x)
    {
        return sqrt($x);
    }

    public function abs($x)
    {
        return abs($x);
    }

    public function sin($x)
    {
        return sin($x);
    }

    public function cos($x)
    {
        return cos($x);
    }

    public function tan($x)
    {
        return tan($x);
    }

    public function log($x) // natural logarithm
    {
        return log($x);
    }
}
