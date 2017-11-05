<?php
namespace tests;

use code\Dollar;
use code\Franc;

class AllCurrenciesTest extends \PHPUnit\Framework\TestCase
{

    public function testMultiplication()
    {
        $five = new Dollar(5);
        $this->assertEquals(new Dollar(10), $five->times(2));
        $this->assertEquals(new Dollar(15), $five->times(3));
    }

    public function testFrancMultiplication()
    {
        $five = new Franc(5);
        $this->assertEquals(new Franc(10), $five->times(2));
        $this->assertEquals(new Franc(15), $five->times(3));
    }

    public function testEquality()
    {
        $five = new Dollar(5);
        $newFive = new Dollar(5);
        $this->assertTrue($five->equals($newFive));
        $newSix = new Dollar(6);
        $this->assertFalse($five->equals($newSix));

        $five = new Franc(5);
        $newFive = new Franc(5);
        $this->assertTrue($five->equals($newFive));
        $newSix = new Franc(6);
        $this->assertFalse($five->equals($newSix));
    }





}
