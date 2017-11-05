<?php
namespace code;

class Franc extends Money
{

    /**
     * Franc constructor.
     * @param $amount
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param $multiplier
     * @return Franc
     */
    public function times($multiplier)
    {
        return new Franc($this->amount * $multiplier);
    }

}