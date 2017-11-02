<?php
namespace code;

class Dollar
{
    /**
     * @var float
     */
    public $amount;

    /**
     * Dollar constructor.
     * @param $amount
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param $multiplier float
     */
    public function times($multiplier)
    {
        $this->amount *= $multiplier;
    }

}