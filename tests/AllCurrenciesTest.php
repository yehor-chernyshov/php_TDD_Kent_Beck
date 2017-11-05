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
        $fiveDollars = new Dollar(5);
        $newFiveDollars = new Dollar(5);
        $this->assertTrue($fiveDollars->equals($newFiveDollars));
        $newSixDollars = new Dollar(6);
        $this->assertFalse($fiveDollars->equals($newSixDollars));

        $fiveFrancs = new Franc(5);
        $newFiveFrancs = new Franc(5);
        $this->assertTrue($fiveFrancs->equals($newFiveFrancs));
        $newSixFrancs = new Franc(6);
        $this->assertFalse($fiveFrancs->equals($newSixFrancs));

        $this->assertFalse($fiveFrancs->equals($fiveDollars));
    }





}
