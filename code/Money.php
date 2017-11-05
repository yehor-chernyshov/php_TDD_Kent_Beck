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
        return $this->amount == $money->amount;
    }
}