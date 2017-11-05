<?php
namespace code;

class Money
{
    /**
     * @var $amount float
     */
    protected $amount;

    /**
     * @param $money
     * @return bool
     */
    public function equals($money)
    {
        return $this->amount == $money->amount && get_class($this) == get_class($money);
    }

    public static function dollar($amount)
    {
        return new Dollar($amount);
    }

    public static function franc($amount)
    {
        return new Franc($amount);
    }

    public function times($multiplier){}

}