<?php
namespace tests;

use code\Dollar;

class AllCurrenciesTest extends \PHPUnit\Framework\TestCase
{

    public function testMultiplication()
    {
        $five = new Dollar(5);
        $this->assertEquals(new Dollar(10), $five->times(2));
        $this->assertEquals(new Dollar(15), $five->times(3));
    }
gi
    public function testEquality()
    {
        $five = new Dollar(5);
        $newFive = new Dollar(5);
        $this->assertTrue($five->equals($newFive));
        $newSix = new Dollar(6);
        $this->assertFalse($five->equals($newSix));
    }

}
