<?php

namespace DesignPatterns\Structural\Adapter;

use DesignPatterns\Structural\Adapter\Foundation\IPayment;

// 'Adaptee' class
class WebMoney implements IPayment
{
    public function sendPayment($amount)
    {
        return 'Paying via WebMoney: '.$amount;
    }
}
