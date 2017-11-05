<?php
namespace tests;

use code\Dollar;
use code\Franc;
use code\Money;

class AllCurrenciesTest extends \PHPUnit\Framework\TestCase
{

    public function testMultiplication()
    {
        $five = Money::dollar(5);
        $this->assertEquals(Money::dollar(10), $five->times(2));
        $this->assertEquals(Money::dollar(15), $five->times(3));
    }

    public function testFrancMultiplication()
    {
        $five = Money::franc(5);
        $this->assertEquals(Money::franc(10), $five->times(2));
        $this->assertEquals(Money::franc(15), $five->times(3));
    }

    public function testEquality()
    {
        $fiveDollars = Money::dollar(5);
        $newFiveDollars = Money::dollar(5);
        $this->assertTrue($fiveDollars->equals($newFiveDollars));
        $newSixDollars = Money::dollar(6);
        $this->assertFalse($fiveDollars->equals($newSixDollars));

        $fiveFrancs = Money::franc(5);
        $newFiveFrancs = Money::franc(5);
        $this->assertTrue($fiveFrancs->equals($newFiveFrancs));
        $newSixFrancs = Money::franc(6);
        $this->assertFalse($fiveFrancs->equals($newSixFrancs));

        $this->assertFalse($fiveFrancs->equals($fiveDollars));
    }





}
