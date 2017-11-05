<?php
namespace code;

class Dollar extends Money
{

    /**
     * Dollar constructor.
     * @param $amount
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param $multiplier
     * @return Dollar
     */
    public function times($multiplier)
    {
        return new Dollar($this->amount * $multiplier);
    }

}