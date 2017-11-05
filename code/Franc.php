<?php
namespace code;

class Franc
{

    /**
     * @var $amount float
     */
    private $amount;

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

    /**
     * @param $object Franc
     * @return bool
     */
    public function equals($object)
    {
        return $this->amount == $object->amount;
    }
}