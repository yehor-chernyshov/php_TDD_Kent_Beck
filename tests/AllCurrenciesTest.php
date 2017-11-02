<?php
namespace tests;

use code\Dollar;

class AllCurrenciesTest extends \PHPUnit\Framework\TestCase
{

    public function testMultiplication()
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertEquals(10, $product->amount);
        $product = $five->times(3);
        $this->assertEquals(15, $product->amount);
    }

    public function testEquality()
    {
        $five = new Dollar(5);
        $newFive = new Dollar(5);
        $this->assertTrue($five->equals($newFive));
        $newSix = new Dollar(6);
        $this->assertFalse($five->equals($newSix));
    }

}
