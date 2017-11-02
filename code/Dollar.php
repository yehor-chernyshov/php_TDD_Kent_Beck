<?php
namespace code;

class Dollar
{
    /**
     * @var $amount float
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
     * @param $multiplier
     * @return Dollar
     */
    public function times($multiplier)
    {
        return new Dollar($this->amount * $multiplier);
    }

    /**
     * @param $object Dollar
     * @return bool
     */
    public function equals($object)
    {
        return $this->amount == $object->amount;
    }

}