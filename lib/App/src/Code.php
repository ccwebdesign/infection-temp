<?php declare( strict_types = 1 );

namespace App;

class Code
{

    private $Test;

    public function __construct( $test = false )
    {
        $this->Test = $test;
    }

    public function getTest()
    : bool
    {
        return $this->Test;
    }
}
