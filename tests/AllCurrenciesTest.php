<?php
use code\Dollar;

class AllCurrenciesTest extends \PHPUnit\Framework\TestCase
{

    public function testMultiplication()
    {
        $five = new Dollar(5);
        $five->times(2);
        $this->assertEquals(10, $five->amount);
    }

}
