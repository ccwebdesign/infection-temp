<?php declare( strict_types = 1 );

namespace Test;

use PHPUnit\Framework\TestCase;
use App\Code;

class CodeTest
    extends TestCase
{
    /**
     * @test
     */
    public function getTest_returns_boolean()
    {
        $TestClass = new Code();

        $actual = $TestClass->getTest();

        $this->assertIsBool( $actual );
    }

    /**
     * @test
     */
    public function getTest_returns_constructed_value()
    {
        $value = true;
        $TestClass = new Code( $value );

        $actual = $TestClass->getTest();

        $this->assertSame( $value, $actual );
    }

    /**
     * @test
     */
    public function getTest_returns_false_by_default()
    {
        $TestClass = new Code();

        $actual = $TestClass->getTest();

        $this->assertFalse( $actual );
    }
}
